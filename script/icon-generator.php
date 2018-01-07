#!/usr/bin/env php
<?php

define( 'CSS_WIDTH', '30' );
define( 'CSS_HEIGHT', '30' );
define( 'README_SIZE', '30' );
define( 'GITHUB_BASE_FILE_LINK', 'https://github.com/Dellos7/local-icons/blob/master' );
//define( 'GITHUB_BASE_RAW_FILE_LINK', 'https://raw.githubusercontent.com/Dellos7/local-icons/master' );
define ('ICONS_FOLDER', 'icons');
define( 'OUTPUT_TABLE_RADME_FILENAME', 'icons-table-readme.md' );

$arguments = retrieveArguments();
iconGenerator( $arguments );

function retrieveArguments() {
    $shortopts  = "";
    $shortopts .= "f:";  // File
    $shortopts .= "t:";  // Format
    $shortopts .= "d:";  // Folder
    $shortopts .= "o:";  // Output folder
    /*$shortopts .= "v::"; // Valor opcional
    $shortopts .= "abc"; // Estas opciones no aceptan valores*/
    
    $longopts  = array(
        "file:",     // Valor obligatorio
        "format:",
        "folder::",
        "output-folder::"
        /*"optional::",    // Valor opcional
        "option",        // Sin valores
        "opt",           // Sin valores*/
    );
    $options = getopt($shortopts, $longopts);

    $dieMessage = null;
    if( !$options ) {
        $dieMessage = 'Valid arguments: -f (--file), -t (--format), -d (--folder)';
    }
    if( !$options['d'] ) {
        if( !$options['f'] ) {
            $dieMessage = 'Required argument: -f or --file';
        }
        if( !$options['t'] ) {
            $dieMessage = 'Required argument: -t or --format';
        }
        if( $dieMessage ) {
            die( $dieMessage . "\n" );
        }
        $res = array(
            'file' => $options['f'],
            'format' => $options['t']
        );
    }
    else {
        if( !$options['t'] ) {
            $dieMessage = 'Required argument: -t or --format';
        }
        if( $dieMessage ) {
            die( $dieMessage . "\n" );
        }
        $res = array(
            'folder' => ".",
            'format' => $options['t']
        );
    }

    return $res;
}

function iconGenerator( $arguments ) {
    if( $arguments['folder'] ) {
        $folder = $arguments['folder'];
        $filesFormat = $arguments['format'];
        $files = readFolder( $folder );
        generateIcons( $files, $filesFormat );
    }
    else {
        $file = $arguments['file'];
        $fileFormat = $arguments['format'];
        generateIcon( $file, $fileFormat, false );
    }
}

function generateIcons( $files, $filesFormat ) {
    unlink(OUTPUT_TABLE_RADME_FILENAME);
    foreach( $files as $file ) {
        generateIcon( $file, $filesFormat , true );
    }
}

function generateIcon( $file, $fileFormat, $isFolder ) {
    checkFileFormat($fileFormat);
    $base64 = getBase64( $file );
    $fileInfo = getFileInfo( $file );
    $name = $fileInfo['filename'];
    $nameWithExt = $fileInfo['basename'];
    createIconFolder($name);
    copyImageToFolder($file, $name, $nameWithExt);
    createBase64File($name, $base64);
    createCssFile($name, $base64, $fileFormat);
    //myImageResize( $file, $name, $fileFormat );
    echoReadmeRow( $name, $fileFormat, $isFolder );
}

function checkFileFormat($fileFormat) {
    if( strtolower($fileFormat) !== 'png' && 
        strtolower($fileFormat) !== 'svg' ) {
            die( 'File format must be PNG or SVG' . "\n" );
        }
}

function getBase64( $file ) {
    $data = file_get_contents($file);
    return base64_encode($data);
}

function getFileInfo( $file ) {
    $info = pathinfo($file);
    return $info;
}

function createIconFolder( $name ) {
    if (!file_exists( $name )) {
        mkdir( $name, 0775, true);
    }
}

function copyImageToFolder( $file, $name, $nameWithExt ) {
    if( !copy( $file, $name . '/' . $nameWithExt ) ) {
        echo 'Failed to copy ' . $file . ' into ' . $name . "\n";
    }
}

function createBase64File( $name, $base64 ) {
    file_put_contents(  $name . '/' . $name . '.base64', $base64);
}

function createCssFile( $name, $base64, $format ) {
    $cssWidth = CSS_WIDTH;
    $cssHeight = CSS_HEIGHT;
    $urlBase64ImageFormat = ( strtolower($format) === 'png' ? 'png' : 'svg+xml' );
    $cssContent = <<<EOF
.${name}-icon {
    width: ${cssWidth}px;
	height: ${cssHeight}px;
	background-size: cover;
	background-repeat: no-repeat;
	display: inline-block;
	background-image: url(
        data:image/${urlBase64ImageFormat};base64,${base64}
    );
}
EOF;
    file_put_contents( $name . '/' . $name . '.css', $cssContent );
}

function myImageResize( $file, $name, $fileFormat ) {
    $readmeSize = README_SIZE;
    if( strtolower($fileFormat) !== 'png' ) {
        echo "Warning: couldn't resize " . $file . "\n";
    }
    else {
        image_resize( $file, $name . '/' . $name . '-' . $readmeSize . '.' . strtolower($fileFormat), $readmeSize, $readmeSize );
    }
}

function echoReadmeRow( $name, $fileFormat, $isFolder ) {
    $readmeSize = README_SIZE;
    $format = strtoupper( $fileFormat );
    $formatLower = strtolower( $fileFormat );
    $gitHubBaseFileLink = GITHUB_BASE_FILE_LINK;
    $iconsFolder = ICONS_FOLDER;

    $row = <<<EOF
    | ${name} | `${name}-icon` | [${name}](${gitHubBaseFileLink}/${iconsFolder}/${name}/${name}.css) | <img src="${iconsFolder}/${name}/${name}.${formatLower}" width="${readmeSize}"> | ${format} |
EOF;
    if( $isFolder ) {
        file_put_contents( OUTPUT_TABLE_RADME_FILENAME, $row . "\n", FILE_APPEND);
    }
    else {
        echo $row . "\n";
    }
}

function readFolder( $folderName ) {
    $files = scandir( $folderName );
    /*foreach( $files as $i=>$file ) {
        $files[$i] = $folderName . '/' . $file;
    }*/
    $keyThis = array_search('.', $files);
    $keyParent = array_search('..', $files);
    $keyDsstore = array_search('.DS_Store', $files);
    unset($files[$keyThis]);
    unset($files[$keyParent]);
    unset($files[$keyDsstore]);
    return $files;
}

function image_resize($src, $dst, $width, $height, $crop=0){

    if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";
  
    $type = strtolower(substr(strrchr($src,"."),1));
    if($type == 'jpeg') $type = 'jpg';
    switch($type){
      case 'bmp': $img = imagecreatefromwbmp($src); break;
      case 'gif': $img = imagecreatefromgif($src); break;
      case 'jpg': $img = imagecreatefromjpeg($src); break;
      case 'png': $img = imagecreatefrompng($src); break;
      default : return "Unsupported picture type!";
    }
  
    // resize
    if($crop){
      if($w < $width or $h < $height) return "Picture is too small!";
      $ratio = max($width/$w, $height/$h);
      $h = $height / $ratio;
      $x = ($w - $width / $ratio) / 2;
      $w = $width / $ratio;
    }
    else{
      if($w < $width and $h < $height) return "Picture is too small!";
      $ratio = min($width/$w, $height/$h);
      $width = $w * $ratio;
      $height = $h * $ratio;
      $x = 0;
    }
  
    $new = imagecreatetruecolor($width, $height);
  
    // preserve transparency
    if($type == "gif" or $type == "png"){
      imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
      imagealphablending($new, false);
      imagesavealpha($new, true);
    }
  
    imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);
  
    switch($type){
      case 'bmp': imagewbmp($new, $dst); break;
      case 'gif': imagegif($new, $dst); break;
      case 'jpg': imagejpeg($new, $dst); break;
      case 'png': imagepng($new, $dst); break;
    }
    return true;
  }