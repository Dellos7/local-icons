# local-icons

> This repo has been created recently, I'm trying to upload the icons as fast as I can.

Put any icon in your HTML web page in a sooo easy way!

The aim of this repo is help people to easily put icons in their web pages without having to do too much work. I also want to make this repo a collection of icons where people can find them easily and just copy/paste to use them.

- **Copy/paste** the icon CSS class into your stylesheet in order to have the icon shown in your HTML.
- No need to import external css files, only use the provided CSS class and enjoy.

## Example

HTML code:

```html
<i class="android-icon"></i>
```

CSS class:
```css
.android-icon {
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

![Android icon](https://raw.githubusercontent.com/Dellos7/local-icons/master/android/android-40.svg?sanitize=true)

> The whole base64 string of the android icon is located [here](https://raw.githubusercontent.com/Dellos7/local-icons/master/android/android.base64)

## The icons

Below I will be listing all the icons that we've got currently available. Just **copy/pase** the CSS located at the **CSS code** colum in your CSS stylesheet and create an HTML element (usually you will be using `<i></i>`) with the CSS class name of the **CSS class name** column.

> You can modify the **width** and **height** of the icon modifying those properties in the CSS code; default they are `width: 30px` and `height: 30px`.

## Social media icons list

**Source**: [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons)

| Icon    | CSS class name | CSS code | Preview  |Format     |
|---------|----------------|----------|----------|-----------|
| android | `android-icon`      |    [android](https://github.com/Dellos7/local-icons/blob/master/android/android.css)      | ![Android icon](https://raw.githubusercontent.com/Dellos7/local-icons/master/android/android-40.svg?sanitize=true) | SVG |

## Fontawesome icons list

**Source**: [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG)

| Icon    | CSS class name | CSS code | Preview  | Format    |
|---------|----------------|----------|----------|-----------|
| arrow right | `arrow-right-icon`      |    [arrow-right](https://github.com/Dellos7/local-icons/blob/master/arrow-right/arrow-right.css)      | ![Arrow right icon](https://raw.githubusercontent.com/Dellos7/local-icons/master/arrow-right/arrow-right-40.png?sanitize=true) | PNG |

## Roadmap

- Upload all the icons from [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG)
- Upload all the icons from [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons)
- Create an automated script to pick a PNG or SVG image and create all the files and CSS code in order to be ready to upload to this repo.
- Create a "How to create your own icon" section.
- Create a "Contribution guidelines" section.
- Create a PNG image icon example.
- Improve the `example.html` file.

## Credits

- I got the idea of creating this repo reading [this wiki](https://github.com/barryclark/jekyll-now/wiki/Adding-Icons) from [barryclark/jekyll-now](https://github.com/barryclark/jekyll-now).
- All the credits should go to them who have made available the icons for us:
    - [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons). Great social-media SVG icons!
    - [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG), allowing to download PNG & SVG icons of [fontawesome.io/icons](http://fontawesome.io/icons/)
