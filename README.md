# local-icons

> This repo has been created recently, I'm trying to upload the icons as fast as I can. Check out the [roadmap](#roadmap).

Put any icon in your HTML web page in a sooo easy way!

The aim of this repo is help people to easily put icons in their web pages without having to do too much work. I also want to make this repo a collection of icons where people can find them easily and just copy/paste to use them.

- **Copy/paste** the icon CSS class into your stylesheet in order to have the icon shown in your HTML.
- No need to import external css files, only use the provided CSS class and enjoy.

## Table of contents
* [Example SVG](#example-svg)
* [Example PNG](#example-png)
* [Create your own icon](#create-your-own-icon)
* [Roadmap](#roadmap)
* [Credits](#license)
* [Related & Similar projects](#related-and-similar-projects)
* [The icons](#the-icons)
	* [Social media icons list](#social-media-icons-list)
	* [Fontawesome black icons list](#fontawesome-black-icons-list)
	* [Fontawesome white icons list](#fontawesome-white-icons-list)


## Example SVG

HTML code:

```html
<i class="android-svg-icon"></i>
```

CSS class:
```css
.android-svg-icon {
	width: 30px;
	height: 30px;
	background-size: cover;
	background-repeat: no-repeat;
	display: inline-block;
	background-image: url(
		data:image/svg+xml;base64,PD9....<rest_of_the_base64_string>);
}
```

would output the icon:

<img src="icons/android-svg/android-svg.svg" width="30">

> The whole base64 string of the android icon is located [here](https://raw.githubusercontent.com/Dellos7/local-icons/master/icons/android-svg/android-svg.base64)

## Example PNG

HTML code:

```html
<i class="apple-icon"></i>
```

CSS class:
```css
.apple-icon {
	width: 30px;
	height: 30px;
	background-size: cover;
	background-repeat: no-repeat;
	display: inline-block;
	background-image: url(
		data:image/png;base64,iVB....<rest_of_the_base64_string>);
}
```

would output the icon:

<img src="icons/apple/apple.png" width="30">

> The whole base64 string of the apple icon is located [here](https://raw.githubusercontent.com/Dellos7/local-icons/master/icons/apple/apple.base64)

## Create your own icon

**Manual way**
> Copy & create each CSS class manually.

1. Go to https://www.base64-image.de/
2. Upload or drag & drop the icon image.
3. Wait for the progress to finish.
4. Click on the `copy css` button.
5. Put the copied stuff into a CSS class, like this (replace `<copied_stuff>`):
```css
.my-awesome-icon {
	width: 30px;
	height: 30px;
	background-size: cover;
	background-repeat: no-repeat;
	display: inline-block;
	background-image: <copied_stuff>
}
```

**Using the script**
> Allows creating the CSS classes in an automatic way for multiple icons.

I've created an automatic PHP script in order to create the icon CSS classes easier.

Put your icon(s) in the folder **faw-icons-png** and do the following:

`cd faw-icons-png`

`../script/icon-generator.php -d 1 -t png`

`find . -type d -exec mv {} ../icons \;`

## Roadmap

- Upload all the icons from [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG). Black & white.
- Upload all the icons from [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons)
- Create an automated script to pick a PNG or SVG image and create all the files and CSS code in order to be ready to upload to this repo.
- Create a "Create your own icon" section.
- Create a "Contribution guidelines" section.
- Create a PNG image icon example. :white_check_mark:
- Create an SVG image icon example. :white_check_mark:
- Improve the `example.html` file.

## Credits

- I got the idea of creating this repo reading [this wiki](https://github.com/barryclark/jekyll-now/wiki/Adding-Icons) from [barryclark/jekyll-now](https://github.com/barryclark/jekyll-now).
- All the credits should go to them who have made available the icons for us:
    - [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons). Great social-media SVG icons!
    - [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG), allowing to download PNG & SVG icons of [fontawesome.io/icons](http://fontawesome.io/icons/)

## License

- This repo's License: [GPL 3.0 License](https://choosealicense.com/licenses/gpl-3.0/)
- [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons) : [GPL 3.0 License](https://choosealicense.com/licenses/gpl-3.0/)
- [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG) : [MIT License](https://choosealicense.com/licenses/mit/)
- [fontawesome.io/icons](http://fontawesome.io/icons/) : [SIL OFL 1.1 License](http://scripts.sil.org/OFL)

# Related and Similar projects

Here you can find similar projects that may interest yout when working with icons:
- [ladjs/font-awesome-assets](https://github.com/ladjs/font-awesome-assets). `npm` package that allows you to create `svg` and `img` HTML tags of the **fontawesome icons** and apply customizations in the color and opacity of the icon. Examples: <img src="https://cdn.rawgit.com/crocodilejs/font-awesome-assets/master/media/rainbow/amazon.svg" width="16" height="16" title="amazon" alt="amazon" /> <img src="https://cdn.rawgit.com/crocodilejs/font-awesome-assets/master/media/rainbow/instagram.svg" width="16" height="16" title="instagram" alt="instagram" /> <img src="https://cdn.rawgit.com/crocodilejs/font-awesome-assets/master/media/rainbow/taxi.svg" width="16" height="16" title="taxi" alt="taxi" /> <img src="https://cdn.rawgit.com/crocodilejs/font-awesome-assets/master/media/rainbow/whatsapp.svg" width="16" height="16" title="whatsapp" alt="whatsapp" />

## The icons

Below I will be listing all the icons that we've got currently available. Just **copy/pase** the CSS located at the **CSS code** colum in your CSS stylesheet and create an HTML element (usually you will be using `<i></i>`) with the CSS class name of the **CSS class name** column.

> You can modify the **width** and **height** of the icon modifying those properties in the CSS code; default they are `width: 30px` and `height: 30px`.

Lists:

- [Social media icons list](#social-media-icons-list)
- [Fontawesome black icons list](#fontawesome-black-icons-list)

## Social media icons list

**Source**: [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons)

| Icon    | CSS class name | CSS code | Preview  |Format     |
|---------|----------------|----------|----------|-----------|
| android | `android-svg-icon`      |    [android svg](https://github.com/Dellos7/local-icons/blob/master/icons/android-svg/android-svg.css)      | <img src="icons/android-svg/android-svg.svg" width="30"> | SVG |
| apple | `apple-svg-icon`      |    [apple svg](https://github.com/Dellos7/local-icons/blob/master/icons/apple-svg/apple-svg.css)      | <img src="icons/apple-svg/apple-svg.svg" width="30"> | SVG |
| ... | ... | ... | ... | ... |

[See the full list](social-media-icons-list.md)

## Fontawesome black icons list

**Source**: [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG).

| Icon    | CSS class name | CSS code | Preview  | Format    |
|---------|----------------|----------|----------|-----------|
| 500px | `500px-icon` | [500px](https://github.com/Dellos7/local-icons/blob/master/icons/500px/500px.css) | <img src="icons/500px/500px.png" width="30"> | PNG |
| address-book-o | `address-book-o-icon` | [address-book-o](https://github.com/Dellos7/local-icons/blob/master/icons/address-book-o/address-book-o.css) | <img src="icons/address-book-o/address-book-o.png" width="30"> | PNG |
| address-book | `address-book-icon` | [address-book](https://github.com/Dellos7/local-icons/blob/master/icons/address-book/address-book.css) | <img src="icons/address-book/address-book.png" width="30"> | PNG |
| address-card-o | `address-card-o-icon` | [address-card-o](https://github.com/Dellos7/local-icons/blob/master/icons/address-card-o/address-card-o.css) | <img src="icons/address-card-o/address-card-o.png" width="30"> | PNG |
| address-card | `address-card-icon` | [address-card](https://github.com/Dellos7/local-icons/blob/master/icons/address-card/address-card.css) | <img src="icons/address-card/address-card.png" width="30"> | PNG |
| ... | ... | ... | ... | ... |

[See the full list](fontawesome-black-icons-list.md)

## Fontawesome white icons list

**Source**: [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG).

| Icon    | CSS class name | CSS code | Preview  | Format    |
|---------|----------------|----------|----------|-----------|
| ... | ... | ... | ... | ... |
