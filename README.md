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

## Create your own icon

***Explain Manual way***

**Using the script**

I've created an automatic PHP script in order to create the icon CSS classes easier.

Put your icon(s) in the folder **faw-icons-png** and do the following:

`cd faw-icons-png`

`../script/icon-generator.php -d 1 -t png`

`find . -type d -exec mv {} ../icons \;`

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

## License

- This repo's License: [GPL 3.0 License](https://choosealicense.com/licenses/gpl-3.0/)
- [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons) : [GPL 3.0 License](https://choosealicense.com/licenses/gpl-3.0/)
- [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG) : [MIT License](https://choosealicense.com/licenses/mit/)
- [fontawesome.io/icons](http://fontawesome.io/icons/) : [SIL OFL 1.1 License](http://scripts.sil.org/OFL)

## The icons

Below I will be listing all the icons that we've got currently available. Just **copy/pase** the CSS located at the **CSS code** colum in your CSS stylesheet and create an HTML element (usually you will be using `<i></i>`) with the CSS class name of the **CSS class name** column.

> You can modify the **width** and **height** of the icon modifying those properties in the CSS code; default they are `width: 30px` and `height: 30px`.

## Social media icons list

**Source**: [neilorangepeel/Free-Social-Icons](https://github.com/neilorangepeel/Free-Social-Icons)

| Icon    | CSS class name | CSS code | Preview  |Format     |
|---------|----------------|----------|----------|-----------|
| android | `android-icon`      |    [android](https://github.com/Dellos7/local-icons/blob/master/android/android.css)      | ![Android icon](https://raw.githubusercontent.com/Dellos7/local-icons/master/android/android-40.svg?sanitize=true) | SVG |
| apple | `apple-icon`      |    [apple](https://github.com/Dellos7/local-icons/blob/master/apple/apple.css)      | ![Apple icon](https://raw.githubusercontent.com/Dellos7/local-icons/master/apple/apple-40.svg?sanitize=true) | SVG |

## Fontawesome icons list

**Source**: [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG).

> **Note**: the icons may seem in bad resolution, however the preview it's only a bad-resolution copy of the original icon in order to be shown here.

### Black icons

| Icon    | CSS class name | CSS code | Preview  | Format    |
|---------|----------------|----------|----------|-----------|
| 500px | `500px-icon` | [500px](https://github.com/Dellos7/local-icons/blob/master/icons/500px/500px.css) | <img src="icons/500px/500px.png" width="30"> | PNG |
| address-book-o | `address-book-o-icon` | [address-book-o](https://github.com/Dellos7/local-icons/blob/master/icons/address-book-o/address-book-o.css) | <img src="icons/address-book-o/address-book-o.png" width="30"> | PNG |
| address-book | `address-book-icon` | [address-book](https://github.com/Dellos7/local-icons/blob/master/icons/address-book/address-book.css) | <img src="icons/address-book/address-book.png" width="30"> | PNG |
| address-card-o | `address-card-o-icon` | [address-card-o](https://github.com/Dellos7/local-icons/blob/master/icons/address-card-o/address-card-o.css) | <img src="icons/address-card-o/address-card-o.png" width="30"> | PNG |
| address-card | `address-card-icon` | [address-card](https://github.com/Dellos7/local-icons/blob/master/icons/address-card/address-card.css) | <img src="icons/address-card/address-card.png" width="30"> | PNG |
| adjust | `adjust-icon` | [adjust](https://github.com/Dellos7/local-icons/blob/master/icons/adjust/adjust.css) | <img src="icons/adjust/adjust.png" width="30"> | PNG |
| adn | `adn-icon` | [adn](https://github.com/Dellos7/local-icons/blob/master/icons/adn/adn.css) | <img src="icons/adn/adn.png" width="30"> | PNG |
| align-center | `align-center-icon` | [align-center](https://github.com/Dellos7/local-icons/blob/master/icons/align-center/align-center.css) | <img src="icons/align-center/align-center.png" width="30"> | PNG |
| align-justify | `align-justify-icon` | [align-justify](https://github.com/Dellos7/local-icons/blob/master/icons/align-justify/align-justify.css) | <img src="icons/align-justify/align-justify.png" width="30"> | PNG |
| align-left | `align-left-icon` | [align-left](https://github.com/Dellos7/local-icons/blob/master/icons/align-left/align-left.css) | <img src="icons/align-left/align-left.png" width="30"> | PNG |
| align-right | `align-right-icon` | [align-right](https://github.com/Dellos7/local-icons/blob/master/icons/align-right/align-right.css) | <img src="icons/align-right/align-right.png" width="30"> | PNG |
| amazon | `amazon-icon` | [amazon](https://github.com/Dellos7/local-icons/blob/master/icons/amazon/amazon.css) | <img src="icons/amazon/amazon.png" width="30"> | PNG |
| ambulance | `ambulance-icon` | [ambulance](https://github.com/Dellos7/local-icons/blob/master/icons/ambulance/ambulance.css) | <img src="icons/ambulance/ambulance.png" width="30"> | PNG |
| american-sign-language-interpreting | `american-sign-language-interpreting-icon` | [american-sign-language-interpreting](https://github.com/Dellos7/local-icons/blob/master/icons/american-sign-language-interpreting/american-sign-language-interpreting.css) | <img src="icons/american-sign-language-interpreting/american-sign-language-interpreting.png" width="30"> | PNG |
| anchor | `anchor-icon` | [anchor](https://github.com/Dellos7/local-icons/blob/master/icons/anchor/anchor.css) | <img src="icons/anchor/anchor.png" width="30"> | PNG |
| android | `android-icon` | [android](https://github.com/Dellos7/local-icons/blob/master/icons/android/android.css) | <img src="icons/android/android.png" width="30"> | PNG |
| angellist | `angellist-icon` | [angellist](https://github.com/Dellos7/local-icons/blob/master/icons/angellist/angellist.css) | <img src="icons/angellist/angellist.png" width="30"> | PNG |
| angle-double-down | `angle-double-down-icon` | [angle-double-down](https://github.com/Dellos7/local-icons/blob/master/icons/angle-double-down/angle-double-down.css) | <img src="icons/angle-double-down/angle-double-down.png" width="30"> | PNG |
| angle-double-left | `angle-double-left-icon` | [angle-double-left](https://github.com/Dellos7/local-icons/blob/master/icons/angle-double-left/angle-double-left.css) | <img src="icons/angle-double-left/angle-double-left.png" width="30"> | PNG |
| angle-double-right | `angle-double-right-icon` | [angle-double-right](https://github.com/Dellos7/local-icons/blob/master/icons/angle-double-right/angle-double-right.css) | <img src="icons/angle-double-right/angle-double-right.png" width="30"> | PNG |
| angle-double-up | `angle-double-up-icon` | [angle-double-up](https://github.com/Dellos7/local-icons/blob/master/icons/angle-double-up/angle-double-up.css) | <img src="icons/angle-double-up/angle-double-up.png" width="30"> | PNG |
| angle-down | `angle-down-icon` | [angle-down](https://github.com/Dellos7/local-icons/blob/master/icons/angle-down/angle-down.css) | <img src="icons/angle-down/angle-down.png" width="30"> | PNG |
| angle-left | `angle-left-icon` | [angle-left](https://github.com/Dellos7/local-icons/blob/master/icons/angle-left/angle-left.css) | <img src="icons/angle-left/angle-left.png" width="30"> | PNG |
| angle-right | `angle-right-icon` | [angle-right](https://github.com/Dellos7/local-icons/blob/master/icons/angle-right/angle-right.css) | <img src="icons/angle-right/angle-right.png" width="30"> | PNG |
| angle-up | `angle-up-icon` | [angle-up](https://github.com/Dellos7/local-icons/blob/master/icons/angle-up/angle-up.css) | <img src="icons/angle-up/angle-up.png" width="30"> | PNG |
| apple | `apple-icon` | [apple](https://github.com/Dellos7/local-icons/blob/master/icons/apple/apple.css) | <img src="icons/apple/apple.png" width="30"> | PNG |
| archive | `archive-icon` | [archive](https://github.com/Dellos7/local-icons/blob/master/icons/archive/archive.css) | <img src="icons/archive/archive.png" width="30"> | PNG |
| area-chart | `area-chart-icon` | [area-chart](https://github.com/Dellos7/local-icons/blob/master/icons/area-chart/area-chart.css) | <img src="icons/area-chart/area-chart.png" width="30"> | PNG |
| arrow-circle-down | `arrow-circle-down-icon` | [arrow-circle-down](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-down/arrow-circle-down.css) | <img src="icons/arrow-circle-down/arrow-circle-down.png" width="30"> | PNG |
| arrow-circle-left | `arrow-circle-left-icon` | [arrow-circle-left](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-left/arrow-circle-left.css) | <img src="icons/arrow-circle-left/arrow-circle-left.png" width="30"> | PNG |
| arrow-circle-o-down | `arrow-circle-o-down-icon` | [arrow-circle-o-down](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-o-down/arrow-circle-o-down.css) | <img src="icons/arrow-circle-o-down/arrow-circle-o-down.png" width="30"> | PNG |
| arrow-circle-o-left | `arrow-circle-o-left-icon` | [arrow-circle-o-left](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-o-left/arrow-circle-o-left.css) | <img src="icons/arrow-circle-o-left/arrow-circle-o-left.png" width="30"> | PNG |
| arrow-circle-o-right | `arrow-circle-o-right-icon` | [arrow-circle-o-right](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-o-right/arrow-circle-o-right.css) | <img src="icons/arrow-circle-o-right/arrow-circle-o-right.png" width="30"> | PNG |
| arrow-circle-o-up | `arrow-circle-o-up-icon` | [arrow-circle-o-up](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-o-up/arrow-circle-o-up.css) | <img src="icons/arrow-circle-o-up/arrow-circle-o-up.png" width="30"> | PNG |
| arrow-circle-right | `arrow-circle-right-icon` | [arrow-circle-right](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-right/arrow-circle-right.css) | <img src="icons/arrow-circle-right/arrow-circle-right.png" width="30"> | PNG |
| arrow-circle-up | `arrow-circle-up-icon` | [arrow-circle-up](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-circle-up/arrow-circle-up.css) | <img src="icons/arrow-circle-up/arrow-circle-up.png" width="30"> | PNG |
| arrow-down | `arrow-down-icon` | [arrow-down](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-down/arrow-down.css) | <img src="icons/arrow-down/arrow-down.png" width="30"> | PNG |
| arrow-left | `arrow-left-icon` | [arrow-left](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-left/arrow-left.css) | <img src="icons/arrow-left/arrow-left.png" width="30"> | PNG |
| arrow-right | `arrow-right-icon` | [arrow-right](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-right/arrow-right.css) | <img src="icons/arrow-right/arrow-right.png" width="30"> | PNG |
| arrow-up | `arrow-up-icon` | [arrow-up](https://github.com/Dellos7/local-icons/blob/master/icons/arrow-up/arrow-up.css) | <img src="icons/arrow-up/arrow-up.png" width="30"> | PNG |
| arrows-alt | `arrows-alt-icon` | [arrows-alt](https://github.com/Dellos7/local-icons/blob/master/icons/arrows-alt/arrows-alt.css) | <img src="icons/arrows-alt/arrows-alt.png" width="30"> | PNG |
| arrows-h | `arrows-h-icon` | [arrows-h](https://github.com/Dellos7/local-icons/blob/master/icons/arrows-h/arrows-h.css) | <img src="icons/arrows-h/arrows-h.png" width="30"> | PNG |
| arrows-v | `arrows-v-icon` | [arrows-v](https://github.com/Dellos7/local-icons/blob/master/icons/arrows-v/arrows-v.css) | <img src="icons/arrows-v/arrows-v.png" width="30"> | PNG |
| arrows | `arrows-icon` | [arrows](https://github.com/Dellos7/local-icons/blob/master/icons/arrows/arrows.css) | <img src="icons/arrows/arrows.png" width="30"> | PNG |
| asl-interpreting | `asl-interpreting-icon` | [asl-interpreting](https://github.com/Dellos7/local-icons/blob/master/icons/asl-interpreting/asl-interpreting.css) | <img src="icons/asl-interpreting/asl-interpreting.png" width="30"> | PNG |
| assistive-listening-systems | `assistive-listening-systems-icon` | [assistive-listening-systems](https://github.com/Dellos7/local-icons/blob/master/icons/assistive-listening-systems/assistive-listening-systems.css) | <img src="icons/assistive-listening-systems/assistive-listening-systems.png" width="30"> | PNG |
| asterisk | `asterisk-icon` | [asterisk](https://github.com/Dellos7/local-icons/blob/master/icons/asterisk/asterisk.css) | <img src="icons/asterisk/asterisk.png" width="30"> | PNG |
| at | `at-icon` | [at](https://github.com/Dellos7/local-icons/blob/master/icons/at/at.css) | <img src="icons/at/at.png" width="30"> | PNG |
| audio-description | `audio-description-icon` | [audio-description](https://github.com/Dellos7/local-icons/blob/master/icons/audio-description/audio-description.css) | <img src="icons/audio-description/audio-description.png" width="30"> | PNG |
| automobile | `automobile-icon` | [automobile](https://github.com/Dellos7/local-icons/blob/master/icons/automobile/automobile.css) | <img src="icons/automobile/automobile.png" width="30"> | PNG |
| backward | `backward-icon` | [backward](https://github.com/Dellos7/local-icons/blob/master/icons/backward/backward.css) | <img src="icons/backward/backward.png" width="30"> | PNG |
| balance-scale | `balance-scale-icon` | [balance-scale](https://github.com/Dellos7/local-icons/blob/master/icons/balance-scale/balance-scale.css) | <img src="icons/balance-scale/balance-scale.png" width="30"> | PNG |
| ban | `ban-icon` | [ban](https://github.com/Dellos7/local-icons/blob/master/icons/ban/ban.css) | <img src="icons/ban/ban.png" width="30"> | PNG |
| bandcamp | `bandcamp-icon` | [bandcamp](https://github.com/Dellos7/local-icons/blob/master/icons/bandcamp/bandcamp.css) | <img src="icons/bandcamp/bandcamp.png" width="30"> | PNG |
| bank | `bank-icon` | [bank](https://github.com/Dellos7/local-icons/blob/master/icons/bank/bank.css) | <img src="icons/bank/bank.png" width="30"> | PNG |
| bar-chart-o | `bar-chart-o-icon` | [bar-chart-o](https://github.com/Dellos7/local-icons/blob/master/icons/bar-chart-o/bar-chart-o.css) | <img src="icons/bar-chart-o/bar-chart-o.png" width="30"> | PNG |
| bar-chart | `bar-chart-icon` | [bar-chart](https://github.com/Dellos7/local-icons/blob/master/icons/bar-chart/bar-chart.css) | <img src="icons/bar-chart/bar-chart.png" width="30"> | PNG |
| barcode | `barcode-icon` | [barcode](https://github.com/Dellos7/local-icons/blob/master/icons/barcode/barcode.css) | <img src="icons/barcode/barcode.png" width="30"> | PNG |
| bars | `bars-icon` | [bars](https://github.com/Dellos7/local-icons/blob/master/icons/bars/bars.css) | <img src="icons/bars/bars.png" width="30"> | PNG |
| bath | `bath-icon` | [bath](https://github.com/Dellos7/local-icons/blob/master/icons/bath/bath.css) | <img src="icons/bath/bath.png" width="30"> | PNG |
| bathtub | `bathtub-icon` | [bathtub](https://github.com/Dellos7/local-icons/blob/master/icons/bathtub/bathtub.css) | <img src="icons/bathtub/bathtub.png" width="30"> | PNG |
| battery-0 | `battery-0-icon` | [battery-0](https://github.com/Dellos7/local-icons/blob/master/icons/battery-0/battery-0.css) | <img src="icons/battery-0/battery-0.png" width="30"> | PNG |
| battery-1 | `battery-1-icon` | [battery-1](https://github.com/Dellos7/local-icons/blob/master/icons/battery-1/battery-1.css) | <img src="icons/battery-1/battery-1.png" width="30"> | PNG |
| battery-2 | `battery-2-icon` | [battery-2](https://github.com/Dellos7/local-icons/blob/master/icons/battery-2/battery-2.css) | <img src="icons/battery-2/battery-2.png" width="30"> | PNG |
| battery-3 | `battery-3-icon` | [battery-3](https://github.com/Dellos7/local-icons/blob/master/icons/battery-3/battery-3.css) | <img src="icons/battery-3/battery-3.png" width="30"> | PNG |
| battery-4 | `battery-4-icon` | [battery-4](https://github.com/Dellos7/local-icons/blob/master/icons/battery-4/battery-4.css) | <img src="icons/battery-4/battery-4.png" width="30"> | PNG |
| battery-empty | `battery-empty-icon` | [battery-empty](https://github.com/Dellos7/local-icons/blob/master/icons/battery-empty/battery-empty.css) | <img src="icons/battery-empty/battery-empty.png" width="30"> | PNG |
| battery-full | `battery-full-icon` | [battery-full](https://github.com/Dellos7/local-icons/blob/master/icons/battery-full/battery-full.css) | <img src="icons/battery-full/battery-full.png" width="30"> | PNG |
| battery-half | `battery-half-icon` | [battery-half](https://github.com/Dellos7/local-icons/blob/master/icons/battery-half/battery-half.css) | <img src="icons/battery-half/battery-half.png" width="30"> | PNG |
| battery-quarter | `battery-quarter-icon` | [battery-quarter](https://github.com/Dellos7/local-icons/blob/master/icons/battery-quarter/battery-quarter.css) | <img src="icons/battery-quarter/battery-quarter.png" width="30"> | PNG |
| battery-three-quarters | `battery-three-quarters-icon` | [battery-three-quarters](https://github.com/Dellos7/local-icons/blob/master/icons/battery-three-quarters/battery-three-quarters.css) | <img src="icons/battery-three-quarters/battery-three-quarters.png" width="30"> | PNG |
| battery | `battery-icon` | [battery](https://github.com/Dellos7/local-icons/blob/master/icons/battery/battery.css) | <img src="icons/battery/battery.png" width="30"> | PNG |
| bed | `bed-icon` | [bed](https://github.com/Dellos7/local-icons/blob/master/icons/bed/bed.css) | <img src="icons/bed/bed.png" width="30"> | PNG |
| beer | `beer-icon` | [beer](https://github.com/Dellos7/local-icons/blob/master/icons/beer/beer.css) | <img src="icons/beer/beer.png" width="30"> | PNG |
| behance-square | `behance-square-icon` | [behance-square](https://github.com/Dellos7/local-icons/blob/master/icons/behance-square/behance-square.css) | <img src="icons/behance-square/behance-square.png" width="30"> | PNG |
| behance | `behance-icon` | [behance](https://github.com/Dellos7/local-icons/blob/master/icons/behance/behance.css) | <img src="icons/behance/behance.png" width="30"> | PNG |
| bell-o | `bell-o-icon` | [bell-o](https://github.com/Dellos7/local-icons/blob/master/icons/bell-o/bell-o.css) | <img src="icons/bell-o/bell-o.png" width="30"> | PNG |
| bell-slash-o | `bell-slash-o-icon` | [bell-slash-o](https://github.com/Dellos7/local-icons/blob/master/icons/bell-slash-o/bell-slash-o.css) | <img src="icons/bell-slash-o/bell-slash-o.png" width="30"> | PNG |
| bell-slash | `bell-slash-icon` | [bell-slash](https://github.com/Dellos7/local-icons/blob/master/icons/bell-slash/bell-slash.css) | <img src="icons/bell-slash/bell-slash.png" width="30"> | PNG |
| bell | `bell-icon` | [bell](https://github.com/Dellos7/local-icons/blob/master/icons/bell/bell.css) | <img src="icons/bell/bell.png" width="30"> | PNG |
| bicycle | `bicycle-icon` | [bicycle](https://github.com/Dellos7/local-icons/blob/master/icons/bicycle/bicycle.css) | <img src="icons/bicycle/bicycle.png" width="30"> | PNG |
| binoculars | `binoculars-icon` | [binoculars](https://github.com/Dellos7/local-icons/blob/master/icons/binoculars/binoculars.css) | <img src="icons/binoculars/binoculars.png" width="30"> | PNG |
| birthday-cake | `birthday-cake-icon` | [birthday-cake](https://github.com/Dellos7/local-icons/blob/master/icons/birthday-cake/birthday-cake.css) | <img src="icons/birthday-cake/birthday-cake.png" width="30"> | PNG |
| bitbucket-square | `bitbucket-square-icon` | [bitbucket-square](https://github.com/Dellos7/local-icons/blob/master/icons/bitbucket-square/bitbucket-square.css) | <img src="icons/bitbucket-square/bitbucket-square.png" width="30"> | PNG |
| bitbucket | `bitbucket-icon` | [bitbucket](https://github.com/Dellos7/local-icons/blob/master/icons/bitbucket/bitbucket.css) | <img src="icons/bitbucket/bitbucket.png" width="30"> | PNG |
| bitcoin | `bitcoin-icon` | [bitcoin](https://github.com/Dellos7/local-icons/blob/master/icons/bitcoin/bitcoin.css) | <img src="icons/bitcoin/bitcoin.png" width="30"> | PNG |
| black-tie | `black-tie-icon` | [black-tie](https://github.com/Dellos7/local-icons/blob/master/icons/black-tie/black-tie.css) | <img src="icons/black-tie/black-tie.png" width="30"> | PNG |
| blind | `blind-icon` | [blind](https://github.com/Dellos7/local-icons/blob/master/icons/blind/blind.css) | <img src="icons/blind/blind.png" width="30"> | PNG |
| bluetooth-b | `bluetooth-b-icon` | [bluetooth-b](https://github.com/Dellos7/local-icons/blob/master/icons/bluetooth-b/bluetooth-b.css) | <img src="icons/bluetooth-b/bluetooth-b.png" width="30"> | PNG |
| bluetooth | `bluetooth-icon` | [bluetooth](https://github.com/Dellos7/local-icons/blob/master/icons/bluetooth/bluetooth.css) | <img src="icons/bluetooth/bluetooth.png" width="30"> | PNG |
| bold | `bold-icon` | [bold](https://github.com/Dellos7/local-icons/blob/master/icons/bold/bold.css) | <img src="icons/bold/bold.png" width="30"> | PNG |
| bolt | `bolt-icon` | [bolt](https://github.com/Dellos7/local-icons/blob/master/icons/bolt/bolt.css) | <img src="icons/bolt/bolt.png" width="30"> | PNG |
| bomb | `bomb-icon` | [bomb](https://github.com/Dellos7/local-icons/blob/master/icons/bomb/bomb.css) | <img src="icons/bomb/bomb.png" width="30"> | PNG |
| book | `book-icon` | [book](https://github.com/Dellos7/local-icons/blob/master/icons/book/book.css) | <img src="icons/book/book.png" width="30"> | PNG |
| bookmark-o | `bookmark-o-icon` | [bookmark-o](https://github.com/Dellos7/local-icons/blob/master/icons/bookmark-o/bookmark-o.css) | <img src="icons/bookmark-o/bookmark-o.png" width="30"> | PNG |
| bookmark | `bookmark-icon` | [bookmark](https://github.com/Dellos7/local-icons/blob/master/icons/bookmark/bookmark.css) | <img src="icons/bookmark/bookmark.png" width="30"> | PNG |
| braille | `braille-icon` | [braille](https://github.com/Dellos7/local-icons/blob/master/icons/braille/braille.css) | <img src="icons/braille/braille.png" width="30"> | PNG |
| briefcase | `briefcase-icon` | [briefcase](https://github.com/Dellos7/local-icons/blob/master/icons/briefcase/briefcase.css) | <img src="icons/briefcase/briefcase.png" width="30"> | PNG |
| btc | `btc-icon` | [btc](https://github.com/Dellos7/local-icons/blob/master/icons/btc/btc.css) | <img src="icons/btc/btc.png" width="30"> | PNG |
| bug | `bug-icon` | [bug](https://github.com/Dellos7/local-icons/blob/master/icons/bug/bug.css) | <img src="icons/bug/bug.png" width="30"> | PNG |
| building-o | `building-o-icon` | [building-o](https://github.com/Dellos7/local-icons/blob/master/icons/building-o/building-o.css) | <img src="icons/building-o/building-o.png" width="30"> | PNG |
| building | `building-icon` | [building](https://github.com/Dellos7/local-icons/blob/master/icons/building/building.css) | <img src="icons/building/building.png" width="30"> | PNG |
| bullhorn | `bullhorn-icon` | [bullhorn](https://github.com/Dellos7/local-icons/blob/master/icons/bullhorn/bullhorn.css) | <img src="icons/bullhorn/bullhorn.png" width="30"> | PNG |
| bullseye | `bullseye-icon` | [bullseye](https://github.com/Dellos7/local-icons/blob/master/icons/bullseye/bullseye.css) | <img src="icons/bullseye/bullseye.png" width="30"> | PNG |
| bus | `bus-icon` | [bus](https://github.com/Dellos7/local-icons/blob/master/icons/bus/bus.css) | <img src="icons/bus/bus.png" width="30"> | PNG |
| buysellads | `buysellads-icon` | [buysellads](https://github.com/Dellos7/local-icons/blob/master/icons/buysellads/buysellads.css) | <img src="icons/buysellads/buysellads.png" width="30"> | PNG |
| cab | `cab-icon` | [cab](https://github.com/Dellos7/local-icons/blob/master/icons/cab/cab.css) | <img src="icons/cab/cab.png" width="30"> | PNG |
| calculator | `calculator-icon` | [calculator](https://github.com/Dellos7/local-icons/blob/master/icons/calculator/calculator.css) | <img src="icons/calculator/calculator.png" width="30"> | PNG |
| calendar-check-o | `calendar-check-o-icon` | [calendar-check-o](https://github.com/Dellos7/local-icons/blob/master/icons/calendar-check-o/calendar-check-o.css) | <img src="icons/calendar-check-o/calendar-check-o.png" width="30"> | PNG |
| calendar-minus-o | `calendar-minus-o-icon` | [calendar-minus-o](https://github.com/Dellos7/local-icons/blob/master/icons/calendar-minus-o/calendar-minus-o.css) | <img src="icons/calendar-minus-o/calendar-minus-o.png" width="30"> | PNG |
| calendar-o | `calendar-o-icon` | [calendar-o](https://github.com/Dellos7/local-icons/blob/master/icons/calendar-o/calendar-o.css) | <img src="icons/calendar-o/calendar-o.png" width="30"> | PNG |
| calendar-plus-o | `calendar-plus-o-icon` | [calendar-plus-o](https://github.com/Dellos7/local-icons/blob/master/icons/calendar-plus-o/calendar-plus-o.css) | <img src="icons/calendar-plus-o/calendar-plus-o.png" width="30"> | PNG |
| calendar-times-o | `calendar-times-o-icon` | [calendar-times-o](https://github.com/Dellos7/local-icons/blob/master/icons/calendar-times-o/calendar-times-o.css) | <img src="icons/calendar-times-o/calendar-times-o.png" width="30"> | PNG |
| calendar | `calendar-icon` | [calendar](https://github.com/Dellos7/local-icons/blob/master/icons/calendar/calendar.css) | <img src="icons/calendar/calendar.png" width="30"> | PNG |
| camera-retro | `camera-retro-icon` | [camera-retro](https://github.com/Dellos7/local-icons/blob/master/icons/camera-retro/camera-retro.css) | <img src="icons/camera-retro/camera-retro.png" width="30"> | PNG |
| camera | `camera-icon` | [camera](https://github.com/Dellos7/local-icons/blob/master/icons/camera/camera.css) | <img src="icons/camera/camera.png" width="30"> | PNG |
| car | `car-icon` | [car](https://github.com/Dellos7/local-icons/blob/master/icons/car/car.css) | <img src="icons/car/car.png" width="30"> | PNG |
| caret-down | `caret-down-icon` | [caret-down](https://github.com/Dellos7/local-icons/blob/master/icons/caret-down/caret-down.css) | <img src="icons/caret-down/caret-down.png" width="30"> | PNG |
| caret-left | `caret-left-icon` | [caret-left](https://github.com/Dellos7/local-icons/blob/master/icons/caret-left/caret-left.css) | <img src="icons/caret-left/caret-left.png" width="30"> | PNG |
| caret-right | `caret-right-icon` | [caret-right](https://github.com/Dellos7/local-icons/blob/master/icons/caret-right/caret-right.css) | <img src="icons/caret-right/caret-right.png" width="30"> | PNG |
| caret-square-o-down | `caret-square-o-down-icon` | [caret-square-o-down](https://github.com/Dellos7/local-icons/blob/master/icons/caret-square-o-down/caret-square-o-down.css) | <img src="icons/caret-square-o-down/caret-square-o-down.png" width="30"> | PNG |
| caret-square-o-left | `caret-square-o-left-icon` | [caret-square-o-left](https://github.com/Dellos7/local-icons/blob/master/icons/caret-square-o-left/caret-square-o-left.css) | <img src="icons/caret-square-o-left/caret-square-o-left.png" width="30"> | PNG |
| caret-square-o-right | `caret-square-o-right-icon` | [caret-square-o-right](https://github.com/Dellos7/local-icons/blob/master/icons/caret-square-o-right/caret-square-o-right.css) | <img src="icons/caret-square-o-right/caret-square-o-right.png" width="30"> | PNG |
| caret-square-o-up | `caret-square-o-up-icon` | [caret-square-o-up](https://github.com/Dellos7/local-icons/blob/master/icons/caret-square-o-up/caret-square-o-up.css) | <img src="icons/caret-square-o-up/caret-square-o-up.png" width="30"> | PNG |
| caret-up | `caret-up-icon` | [caret-up](https://github.com/Dellos7/local-icons/blob/master/icons/caret-up/caret-up.css) | <img src="icons/caret-up/caret-up.png" width="30"> | PNG |
| cart-arrow-down | `cart-arrow-down-icon` | [cart-arrow-down](https://github.com/Dellos7/local-icons/blob/master/icons/cart-arrow-down/cart-arrow-down.css) | <img src="icons/cart-arrow-down/cart-arrow-down.png" width="30"> | PNG |
| cart-plus | `cart-plus-icon` | [cart-plus](https://github.com/Dellos7/local-icons/blob/master/icons/cart-plus/cart-plus.css) | <img src="icons/cart-plus/cart-plus.png" width="30"> | PNG |
| cc-amex | `cc-amex-icon` | [cc-amex](https://github.com/Dellos7/local-icons/blob/master/icons/cc-amex/cc-amex.css) | <img src="icons/cc-amex/cc-amex.png" width="30"> | PNG |
| cc-diners-club | `cc-diners-club-icon` | [cc-diners-club](https://github.com/Dellos7/local-icons/blob/master/icons/cc-diners-club/cc-diners-club.css) | <img src="icons/cc-diners-club/cc-diners-club.png" width="30"> | PNG |
| cc-discover | `cc-discover-icon` | [cc-discover](https://github.com/Dellos7/local-icons/blob/master/icons/cc-discover/cc-discover.css) | <img src="icons/cc-discover/cc-discover.png" width="30"> | PNG |
| cc-jcb | `cc-jcb-icon` | [cc-jcb](https://github.com/Dellos7/local-icons/blob/master/icons/cc-jcb/cc-jcb.css) | <img src="icons/cc-jcb/cc-jcb.png" width="30"> | PNG |
| cc-mastercard | `cc-mastercard-icon` | [cc-mastercard](https://github.com/Dellos7/local-icons/blob/master/icons/cc-mastercard/cc-mastercard.css) | <img src="icons/cc-mastercard/cc-mastercard.png" width="30"> | PNG |
| cc-paypal | `cc-paypal-icon` | [cc-paypal](https://github.com/Dellos7/local-icons/blob/master/icons/cc-paypal/cc-paypal.css) | <img src="icons/cc-paypal/cc-paypal.png" width="30"> | PNG |
| cc-stripe | `cc-stripe-icon` | [cc-stripe](https://github.com/Dellos7/local-icons/blob/master/icons/cc-stripe/cc-stripe.css) | <img src="icons/cc-stripe/cc-stripe.png" width="30"> | PNG |
| cc-visa | `cc-visa-icon` | [cc-visa](https://github.com/Dellos7/local-icons/blob/master/icons/cc-visa/cc-visa.css) | <img src="icons/cc-visa/cc-visa.png" width="30"> | PNG |
| cc | `cc-icon` | [cc](https://github.com/Dellos7/local-icons/blob/master/icons/cc/cc.css) | <img src="icons/cc/cc.png" width="30"> | PNG |
| certificate | `certificate-icon` | [certificate](https://github.com/Dellos7/local-icons/blob/master/icons/certificate/certificate.css) | <img src="icons/certificate/certificate.png" width="30"> | PNG |
| chain-broken | `chain-broken-icon` | [chain-broken](https://github.com/Dellos7/local-icons/blob/master/icons/chain-broken/chain-broken.css) | <img src="icons/chain-broken/chain-broken.png" width="30"> | PNG |
| chain | `chain-icon` | [chain](https://github.com/Dellos7/local-icons/blob/master/icons/chain/chain.css) | <img src="icons/chain/chain.png" width="30"> | PNG |
| check-circle-o | `check-circle-o-icon` | [check-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/check-circle-o/check-circle-o.css) | <img src="icons/check-circle-o/check-circle-o.png" width="30"> | PNG |
| check-circle | `check-circle-icon` | [check-circle](https://github.com/Dellos7/local-icons/blob/master/icons/check-circle/check-circle.css) | <img src="icons/check-circle/check-circle.png" width="30"> | PNG |
| check-square-o | `check-square-o-icon` | [check-square-o](https://github.com/Dellos7/local-icons/blob/master/icons/check-square-o/check-square-o.css) | <img src="icons/check-square-o/check-square-o.png" width="30"> | PNG |
| check-square | `check-square-icon` | [check-square](https://github.com/Dellos7/local-icons/blob/master/icons/check-square/check-square.css) | <img src="icons/check-square/check-square.png" width="30"> | PNG |
| check | `check-icon` | [check](https://github.com/Dellos7/local-icons/blob/master/icons/check/check.css) | <img src="icons/check/check.png" width="30"> | PNG |
| chevron-circle-down | `chevron-circle-down-icon` | [chevron-circle-down](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-circle-down/chevron-circle-down.css) | <img src="icons/chevron-circle-down/chevron-circle-down.png" width="30"> | PNG |
| chevron-circle-left | `chevron-circle-left-icon` | [chevron-circle-left](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-circle-left/chevron-circle-left.css) | <img src="icons/chevron-circle-left/chevron-circle-left.png" width="30"> | PNG |
| chevron-circle-right | `chevron-circle-right-icon` | [chevron-circle-right](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-circle-right/chevron-circle-right.css) | <img src="icons/chevron-circle-right/chevron-circle-right.png" width="30"> | PNG |
| chevron-circle-up | `chevron-circle-up-icon` | [chevron-circle-up](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-circle-up/chevron-circle-up.css) | <img src="icons/chevron-circle-up/chevron-circle-up.png" width="30"> | PNG |
| chevron-down | `chevron-down-icon` | [chevron-down](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-down/chevron-down.css) | <img src="icons/chevron-down/chevron-down.png" width="30"> | PNG |
| chevron-left | `chevron-left-icon` | [chevron-left](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-left/chevron-left.css) | <img src="icons/chevron-left/chevron-left.png" width="30"> | PNG |
| chevron-right | `chevron-right-icon` | [chevron-right](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-right/chevron-right.css) | <img src="icons/chevron-right/chevron-right.png" width="30"> | PNG |
| chevron-up | `chevron-up-icon` | [chevron-up](https://github.com/Dellos7/local-icons/blob/master/icons/chevron-up/chevron-up.css) | <img src="icons/chevron-up/chevron-up.png" width="30"> | PNG |
| child | `child-icon` | [child](https://github.com/Dellos7/local-icons/blob/master/icons/child/child.css) | <img src="icons/child/child.png" width="30"> | PNG |
| chrome | `chrome-icon` | [chrome](https://github.com/Dellos7/local-icons/blob/master/icons/chrome/chrome.css) | <img src="icons/chrome/chrome.png" width="30"> | PNG |
| circle-o-notch | `circle-o-notch-icon` | [circle-o-notch](https://github.com/Dellos7/local-icons/blob/master/icons/circle-o-notch/circle-o-notch.css) | <img src="icons/circle-o-notch/circle-o-notch.png" width="30"> | PNG |
| circle-o | `circle-o-icon` | [circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/circle-o/circle-o.css) | <img src="icons/circle-o/circle-o.png" width="30"> | PNG |
| circle-thin | `circle-thin-icon` | [circle-thin](https://github.com/Dellos7/local-icons/blob/master/icons/circle-thin/circle-thin.css) | <img src="icons/circle-thin/circle-thin.png" width="30"> | PNG |
| circle | `circle-icon` | [circle](https://github.com/Dellos7/local-icons/blob/master/icons/circle/circle.css) | <img src="icons/circle/circle.png" width="30"> | PNG |
| clipboard | `clipboard-icon` | [clipboard](https://github.com/Dellos7/local-icons/blob/master/icons/clipboard/clipboard.css) | <img src="icons/clipboard/clipboard.png" width="30"> | PNG |
| clock-o | `clock-o-icon` | [clock-o](https://github.com/Dellos7/local-icons/blob/master/icons/clock-o/clock-o.css) | <img src="icons/clock-o/clock-o.png" width="30"> | PNG |
| clone | `clone-icon` | [clone](https://github.com/Dellos7/local-icons/blob/master/icons/clone/clone.css) | <img src="icons/clone/clone.png" width="30"> | PNG |
| close | `close-icon` | [close](https://github.com/Dellos7/local-icons/blob/master/icons/close/close.css) | <img src="icons/close/close.png" width="30"> | PNG |
| cloud-download | `cloud-download-icon` | [cloud-download](https://github.com/Dellos7/local-icons/blob/master/icons/cloud-download/cloud-download.css) | <img src="icons/cloud-download/cloud-download.png" width="30"> | PNG |
| cloud-upload | `cloud-upload-icon` | [cloud-upload](https://github.com/Dellos7/local-icons/blob/master/icons/cloud-upload/cloud-upload.css) | <img src="icons/cloud-upload/cloud-upload.png" width="30"> | PNG |
| cloud | `cloud-icon` | [cloud](https://github.com/Dellos7/local-icons/blob/master/icons/cloud/cloud.css) | <img src="icons/cloud/cloud.png" width="30"> | PNG |
| cny | `cny-icon` | [cny](https://github.com/Dellos7/local-icons/blob/master/icons/cny/cny.css) | <img src="icons/cny/cny.png" width="30"> | PNG |
| code-fork | `code-fork-icon` | [code-fork](https://github.com/Dellos7/local-icons/blob/master/icons/code-fork/code-fork.css) | <img src="icons/code-fork/code-fork.png" width="30"> | PNG |
| code | `code-icon` | [code](https://github.com/Dellos7/local-icons/blob/master/icons/code/code.css) | <img src="icons/code/code.png" width="30"> | PNG |
| codepen | `codepen-icon` | [codepen](https://github.com/Dellos7/local-icons/blob/master/icons/codepen/codepen.css) | <img src="icons/codepen/codepen.png" width="30"> | PNG |
| codiepie | `codiepie-icon` | [codiepie](https://github.com/Dellos7/local-icons/blob/master/icons/codiepie/codiepie.css) | <img src="icons/codiepie/codiepie.png" width="30"> | PNG |
| coffee | `coffee-icon` | [coffee](https://github.com/Dellos7/local-icons/blob/master/icons/coffee/coffee.css) | <img src="icons/coffee/coffee.png" width="30"> | PNG |
| cog | `cog-icon` | [cog](https://github.com/Dellos7/local-icons/blob/master/icons/cog/cog.css) | <img src="icons/cog/cog.png" width="30"> | PNG |
| cogs | `cogs-icon` | [cogs](https://github.com/Dellos7/local-icons/blob/master/icons/cogs/cogs.css) | <img src="icons/cogs/cogs.png" width="30"> | PNG |
| columns | `columns-icon` | [columns](https://github.com/Dellos7/local-icons/blob/master/icons/columns/columns.css) | <img src="icons/columns/columns.png" width="30"> | PNG |
| comment-o | `comment-o-icon` | [comment-o](https://github.com/Dellos7/local-icons/blob/master/icons/comment-o/comment-o.css) | <img src="icons/comment-o/comment-o.png" width="30"> | PNG |
| comment | `comment-icon` | [comment](https://github.com/Dellos7/local-icons/blob/master/icons/comment/comment.css) | <img src="icons/comment/comment.png" width="30"> | PNG |
| commenting-o | `commenting-o-icon` | [commenting-o](https://github.com/Dellos7/local-icons/blob/master/icons/commenting-o/commenting-o.css) | <img src="icons/commenting-o/commenting-o.png" width="30"> | PNG |
| commenting | `commenting-icon` | [commenting](https://github.com/Dellos7/local-icons/blob/master/icons/commenting/commenting.css) | <img src="icons/commenting/commenting.png" width="30"> | PNG |
| comments-o | `comments-o-icon` | [comments-o](https://github.com/Dellos7/local-icons/blob/master/icons/comments-o/comments-o.css) | <img src="icons/comments-o/comments-o.png" width="30"> | PNG |
| comments | `comments-icon` | [comments](https://github.com/Dellos7/local-icons/blob/master/icons/comments/comments.css) | <img src="icons/comments/comments.png" width="30"> | PNG |
| compass | `compass-icon` | [compass](https://github.com/Dellos7/local-icons/blob/master/icons/compass/compass.css) | <img src="icons/compass/compass.png" width="30"> | PNG |
| compress | `compress-icon` | [compress](https://github.com/Dellos7/local-icons/blob/master/icons/compress/compress.css) | <img src="icons/compress/compress.png" width="30"> | PNG |
| connectdevelop | `connectdevelop-icon` | [connectdevelop](https://github.com/Dellos7/local-icons/blob/master/icons/connectdevelop/connectdevelop.css) | <img src="icons/connectdevelop/connectdevelop.png" width="30"> | PNG |
| contao | `contao-icon` | [contao](https://github.com/Dellos7/local-icons/blob/master/icons/contao/contao.css) | <img src="icons/contao/contao.png" width="30"> | PNG |
| copy | `copy-icon` | [copy](https://github.com/Dellos7/local-icons/blob/master/icons/copy/copy.css) | <img src="icons/copy/copy.png" width="30"> | PNG |
| copyright | `copyright-icon` | [copyright](https://github.com/Dellos7/local-icons/blob/master/icons/copyright/copyright.css) | <img src="icons/copyright/copyright.png" width="30"> | PNG |
| creative-commons | `creative-commons-icon` | [creative-commons](https://github.com/Dellos7/local-icons/blob/master/icons/creative-commons/creative-commons.css) | <img src="icons/creative-commons/creative-commons.png" width="30"> | PNG |
| credit-card-alt | `credit-card-alt-icon` | [credit-card-alt](https://github.com/Dellos7/local-icons/blob/master/icons/credit-card-alt/credit-card-alt.css) | <img src="icons/credit-card-alt/credit-card-alt.png" width="30"> | PNG |
| credit-card | `credit-card-icon` | [credit-card](https://github.com/Dellos7/local-icons/blob/master/icons/credit-card/credit-card.css) | <img src="icons/credit-card/credit-card.png" width="30"> | PNG |
| crop | `crop-icon` | [crop](https://github.com/Dellos7/local-icons/blob/master/icons/crop/crop.css) | <img src="icons/crop/crop.png" width="30"> | PNG |
| crosshairs | `crosshairs-icon` | [crosshairs](https://github.com/Dellos7/local-icons/blob/master/icons/crosshairs/crosshairs.css) | <img src="icons/crosshairs/crosshairs.png" width="30"> | PNG |
| css3 | `css3-icon` | [css3](https://github.com/Dellos7/local-icons/blob/master/icons/css3/css3.css) | <img src="icons/css3/css3.png" width="30"> | PNG |
| cube | `cube-icon` | [cube](https://github.com/Dellos7/local-icons/blob/master/icons/cube/cube.css) | <img src="icons/cube/cube.png" width="30"> | PNG |
| cubes | `cubes-icon` | [cubes](https://github.com/Dellos7/local-icons/blob/master/icons/cubes/cubes.css) | <img src="icons/cubes/cubes.png" width="30"> | PNG |
| cut | `cut-icon` | [cut](https://github.com/Dellos7/local-icons/blob/master/icons/cut/cut.css) | <img src="icons/cut/cut.png" width="30"> | PNG |
| cutlery | `cutlery-icon` | [cutlery](https://github.com/Dellos7/local-icons/blob/master/icons/cutlery/cutlery.css) | <img src="icons/cutlery/cutlery.png" width="30"> | PNG |
| dashboard | `dashboard-icon` | [dashboard](https://github.com/Dellos7/local-icons/blob/master/icons/dashboard/dashboard.css) | <img src="icons/dashboard/dashboard.png" width="30"> | PNG |
| dashcube | `dashcube-icon` | [dashcube](https://github.com/Dellos7/local-icons/blob/master/icons/dashcube/dashcube.css) | <img src="icons/dashcube/dashcube.png" width="30"> | PNG |
| database | `database-icon` | [database](https://github.com/Dellos7/local-icons/blob/master/icons/database/database.css) | <img src="icons/database/database.png" width="30"> | PNG |
| deaf | `deaf-icon` | [deaf](https://github.com/Dellos7/local-icons/blob/master/icons/deaf/deaf.css) | <img src="icons/deaf/deaf.png" width="30"> | PNG |
| deafness | `deafness-icon` | [deafness](https://github.com/Dellos7/local-icons/blob/master/icons/deafness/deafness.css) | <img src="icons/deafness/deafness.png" width="30"> | PNG |
| dedent | `dedent-icon` | [dedent](https://github.com/Dellos7/local-icons/blob/master/icons/dedent/dedent.css) | <img src="icons/dedent/dedent.png" width="30"> | PNG |
| delicious | `delicious-icon` | [delicious](https://github.com/Dellos7/local-icons/blob/master/icons/delicious/delicious.css) | <img src="icons/delicious/delicious.png" width="30"> | PNG |
| desktop | `desktop-icon` | [desktop](https://github.com/Dellos7/local-icons/blob/master/icons/desktop/desktop.css) | <img src="icons/desktop/desktop.png" width="30"> | PNG |
| deviantart | `deviantart-icon` | [deviantart](https://github.com/Dellos7/local-icons/blob/master/icons/deviantart/deviantart.css) | <img src="icons/deviantart/deviantart.png" width="30"> | PNG |
| diamond | `diamond-icon` | [diamond](https://github.com/Dellos7/local-icons/blob/master/icons/diamond/diamond.css) | <img src="icons/diamond/diamond.png" width="30"> | PNG |
| digg | `digg-icon` | [digg](https://github.com/Dellos7/local-icons/blob/master/icons/digg/digg.css) | <img src="icons/digg/digg.png" width="30"> | PNG |
| dollar | `dollar-icon` | [dollar](https://github.com/Dellos7/local-icons/blob/master/icons/dollar/dollar.css) | <img src="icons/dollar/dollar.png" width="30"> | PNG |
| dot-circle-o | `dot-circle-o-icon` | [dot-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/dot-circle-o/dot-circle-o.css) | <img src="icons/dot-circle-o/dot-circle-o.png" width="30"> | PNG |
| download | `download-icon` | [download](https://github.com/Dellos7/local-icons/blob/master/icons/download/download.css) | <img src="icons/download/download.png" width="30"> | PNG |
| dribbble | `dribbble-icon` | [dribbble](https://github.com/Dellos7/local-icons/blob/master/icons/dribbble/dribbble.css) | <img src="icons/dribbble/dribbble.png" width="30"> | PNG |
| drivers-license-o | `drivers-license-o-icon` | [drivers-license-o](https://github.com/Dellos7/local-icons/blob/master/icons/drivers-license-o/drivers-license-o.css) | <img src="icons/drivers-license-o/drivers-license-o.png" width="30"> | PNG |
| drivers-license | `drivers-license-icon` | [drivers-license](https://github.com/Dellos7/local-icons/blob/master/icons/drivers-license/drivers-license.css) | <img src="icons/drivers-license/drivers-license.png" width="30"> | PNG |
| dropbox | `dropbox-icon` | [dropbox](https://github.com/Dellos7/local-icons/blob/master/icons/dropbox/dropbox.css) | <img src="icons/dropbox/dropbox.png" width="30"> | PNG |
| drupal | `drupal-icon` | [drupal](https://github.com/Dellos7/local-icons/blob/master/icons/drupal/drupal.css) | <img src="icons/drupal/drupal.png" width="30"> | PNG |
| edge | `edge-icon` | [edge](https://github.com/Dellos7/local-icons/blob/master/icons/edge/edge.css) | <img src="icons/edge/edge.png" width="30"> | PNG |
| edit | `edit-icon` | [edit](https://github.com/Dellos7/local-icons/blob/master/icons/edit/edit.css) | <img src="icons/edit/edit.png" width="30"> | PNG |
| eercast | `eercast-icon` | [eercast](https://github.com/Dellos7/local-icons/blob/master/icons/eercast/eercast.css) | <img src="icons/eercast/eercast.png" width="30"> | PNG |
| eject | `eject-icon` | [eject](https://github.com/Dellos7/local-icons/blob/master/icons/eject/eject.css) | <img src="icons/eject/eject.png" width="30"> | PNG |
| ellipsis-h | `ellipsis-h-icon` | [ellipsis-h](https://github.com/Dellos7/local-icons/blob/master/icons/ellipsis-h/ellipsis-h.css) | <img src="icons/ellipsis-h/ellipsis-h.png" width="30"> | PNG |
| ellipsis-v | `ellipsis-v-icon` | [ellipsis-v](https://github.com/Dellos7/local-icons/blob/master/icons/ellipsis-v/ellipsis-v.css) | <img src="icons/ellipsis-v/ellipsis-v.png" width="30"> | PNG |
| empire | `empire-icon` | [empire](https://github.com/Dellos7/local-icons/blob/master/icons/empire/empire.css) | <img src="icons/empire/empire.png" width="30"> | PNG |
| envelope-o | `envelope-o-icon` | [envelope-o](https://github.com/Dellos7/local-icons/blob/master/icons/envelope-o/envelope-o.css) | <img src="icons/envelope-o/envelope-o.png" width="30"> | PNG |
| envelope-open-o | `envelope-open-o-icon` | [envelope-open-o](https://github.com/Dellos7/local-icons/blob/master/icons/envelope-open-o/envelope-open-o.css) | <img src="icons/envelope-open-o/envelope-open-o.png" width="30"> | PNG |
| envelope-open | `envelope-open-icon` | [envelope-open](https://github.com/Dellos7/local-icons/blob/master/icons/envelope-open/envelope-open.css) | <img src="icons/envelope-open/envelope-open.png" width="30"> | PNG |
| envelope-square | `envelope-square-icon` | [envelope-square](https://github.com/Dellos7/local-icons/blob/master/icons/envelope-square/envelope-square.css) | <img src="icons/envelope-square/envelope-square.png" width="30"> | PNG |
| envelope | `envelope-icon` | [envelope](https://github.com/Dellos7/local-icons/blob/master/icons/envelope/envelope.css) | <img src="icons/envelope/envelope.png" width="30"> | PNG |
| envira | `envira-icon` | [envira](https://github.com/Dellos7/local-icons/blob/master/icons/envira/envira.css) | <img src="icons/envira/envira.png" width="30"> | PNG |
| eraser | `eraser-icon` | [eraser](https://github.com/Dellos7/local-icons/blob/master/icons/eraser/eraser.css) | <img src="icons/eraser/eraser.png" width="30"> | PNG |
| etsy | `etsy-icon` | [etsy](https://github.com/Dellos7/local-icons/blob/master/icons/etsy/etsy.css) | <img src="icons/etsy/etsy.png" width="30"> | PNG |
| eur | `eur-icon` | [eur](https://github.com/Dellos7/local-icons/blob/master/icons/eur/eur.css) | <img src="icons/eur/eur.png" width="30"> | PNG |
| euro | `euro-icon` | [euro](https://github.com/Dellos7/local-icons/blob/master/icons/euro/euro.css) | <img src="icons/euro/euro.png" width="30"> | PNG |
| exchange | `exchange-icon` | [exchange](https://github.com/Dellos7/local-icons/blob/master/icons/exchange/exchange.css) | <img src="icons/exchange/exchange.png" width="30"> | PNG |
| exclamation-circle | `exclamation-circle-icon` | [exclamation-circle](https://github.com/Dellos7/local-icons/blob/master/icons/exclamation-circle/exclamation-circle.css) | <img src="icons/exclamation-circle/exclamation-circle.png" width="30"> | PNG |
| exclamation-triangle | `exclamation-triangle-icon` | [exclamation-triangle](https://github.com/Dellos7/local-icons/blob/master/icons/exclamation-triangle/exclamation-triangle.css) | <img src="icons/exclamation-triangle/exclamation-triangle.png" width="30"> | PNG |
| exclamation | `exclamation-icon` | [exclamation](https://github.com/Dellos7/local-icons/blob/master/icons/exclamation/exclamation.css) | <img src="icons/exclamation/exclamation.png" width="30"> | PNG |
| expand | `expand-icon` | [expand](https://github.com/Dellos7/local-icons/blob/master/icons/expand/expand.css) | <img src="icons/expand/expand.png" width="30"> | PNG |
| expeditedssl | `expeditedssl-icon` | [expeditedssl](https://github.com/Dellos7/local-icons/blob/master/icons/expeditedssl/expeditedssl.css) | <img src="icons/expeditedssl/expeditedssl.png" width="30"> | PNG |
| external-link-square | `external-link-square-icon` | [external-link-square](https://github.com/Dellos7/local-icons/blob/master/icons/external-link-square/external-link-square.css) | <img src="icons/external-link-square/external-link-square.png" width="30"> | PNG |
| external-link | `external-link-icon` | [external-link](https://github.com/Dellos7/local-icons/blob/master/icons/external-link/external-link.css) | <img src="icons/external-link/external-link.png" width="30"> | PNG |
| eye-slash | `eye-slash-icon` | [eye-slash](https://github.com/Dellos7/local-icons/blob/master/icons/eye-slash/eye-slash.css) | <img src="icons/eye-slash/eye-slash.png" width="30"> | PNG |
| eye | `eye-icon` | [eye](https://github.com/Dellos7/local-icons/blob/master/icons/eye/eye.css) | <img src="icons/eye/eye.png" width="30"> | PNG |
| eyedropper | `eyedropper-icon` | [eyedropper](https://github.com/Dellos7/local-icons/blob/master/icons/eyedropper/eyedropper.css) | <img src="icons/eyedropper/eyedropper.png" width="30"> | PNG |
| fa | `fa-icon` | [fa](https://github.com/Dellos7/local-icons/blob/master/icons/fa/fa.css) | <img src="icons/fa/fa.png" width="30"> | PNG |
| facebook-f | `facebook-f-icon` | [facebook-f](https://github.com/Dellos7/local-icons/blob/master/icons/facebook-f/facebook-f.css) | <img src="icons/facebook-f/facebook-f.png" width="30"> | PNG |
| facebook-official | `facebook-official-icon` | [facebook-official](https://github.com/Dellos7/local-icons/blob/master/icons/facebook-official/facebook-official.css) | <img src="icons/facebook-official/facebook-official.png" width="30"> | PNG |
| facebook-square | `facebook-square-icon` | [facebook-square](https://github.com/Dellos7/local-icons/blob/master/icons/facebook-square/facebook-square.css) | <img src="icons/facebook-square/facebook-square.png" width="30"> | PNG |
| facebook | `facebook-icon` | [facebook](https://github.com/Dellos7/local-icons/blob/master/icons/facebook/facebook.css) | <img src="icons/facebook/facebook.png" width="30"> | PNG |
| fast-backward | `fast-backward-icon` | [fast-backward](https://github.com/Dellos7/local-icons/blob/master/icons/fast-backward/fast-backward.css) | <img src="icons/fast-backward/fast-backward.png" width="30"> | PNG |
| fast-forward | `fast-forward-icon` | [fast-forward](https://github.com/Dellos7/local-icons/blob/master/icons/fast-forward/fast-forward.css) | <img src="icons/fast-forward/fast-forward.png" width="30"> | PNG |
| fax | `fax-icon` | [fax](https://github.com/Dellos7/local-icons/blob/master/icons/fax/fax.css) | <img src="icons/fax/fax.png" width="30"> | PNG |
| feed | `feed-icon` | [feed](https://github.com/Dellos7/local-icons/blob/master/icons/feed/feed.css) | <img src="icons/feed/feed.png" width="30"> | PNG |
| female | `female-icon` | [female](https://github.com/Dellos7/local-icons/blob/master/icons/female/female.css) | <img src="icons/female/female.png" width="30"> | PNG |
| fighter-jet | `fighter-jet-icon` | [fighter-jet](https://github.com/Dellos7/local-icons/blob/master/icons/fighter-jet/fighter-jet.css) | <img src="icons/fighter-jet/fighter-jet.png" width="30"> | PNG |
| file-archive-o | `file-archive-o-icon` | [file-archive-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-archive-o/file-archive-o.css) | <img src="icons/file-archive-o/file-archive-o.png" width="30"> | PNG |
| file-audio-o | `file-audio-o-icon` | [file-audio-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-audio-o/file-audio-o.css) | <img src="icons/file-audio-o/file-audio-o.png" width="30"> | PNG |
| file-code-o | `file-code-o-icon` | [file-code-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-code-o/file-code-o.css) | <img src="icons/file-code-o/file-code-o.png" width="30"> | PNG |
| file-excel-o | `file-excel-o-icon` | [file-excel-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-excel-o/file-excel-o.css) | <img src="icons/file-excel-o/file-excel-o.png" width="30"> | PNG |
| file-image-o | `file-image-o-icon` | [file-image-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-image-o/file-image-o.css) | <img src="icons/file-image-o/file-image-o.png" width="30"> | PNG |
| file-movie-o | `file-movie-o-icon` | [file-movie-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-movie-o/file-movie-o.css) | <img src="icons/file-movie-o/file-movie-o.png" width="30"> | PNG |
| file-o | `file-o-icon` | [file-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-o/file-o.css) | <img src="icons/file-o/file-o.png" width="30"> | PNG |
| file-pdf-o | `file-pdf-o-icon` | [file-pdf-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-pdf-o/file-pdf-o.css) | <img src="icons/file-pdf-o/file-pdf-o.png" width="30"> | PNG |
| file-photo-o | `file-photo-o-icon` | [file-photo-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-photo-o/file-photo-o.css) | <img src="icons/file-photo-o/file-photo-o.png" width="30"> | PNG |
| file-picture-o | `file-picture-o-icon` | [file-picture-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-picture-o/file-picture-o.css) | <img src="icons/file-picture-o/file-picture-o.png" width="30"> | PNG |
| file-powerpoint-o | `file-powerpoint-o-icon` | [file-powerpoint-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-powerpoint-o/file-powerpoint-o.css) | <img src="icons/file-powerpoint-o/file-powerpoint-o.png" width="30"> | PNG |
| file-sound-o | `file-sound-o-icon` | [file-sound-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-sound-o/file-sound-o.css) | <img src="icons/file-sound-o/file-sound-o.png" width="30"> | PNG |
| file-text-o | `file-text-o-icon` | [file-text-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-text-o/file-text-o.css) | <img src="icons/file-text-o/file-text-o.png" width="30"> | PNG |
| file-text | `file-text-icon` | [file-text](https://github.com/Dellos7/local-icons/blob/master/icons/file-text/file-text.css) | <img src="icons/file-text/file-text.png" width="30"> | PNG |
| file-video-o | `file-video-o-icon` | [file-video-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-video-o/file-video-o.css) | <img src="icons/file-video-o/file-video-o.png" width="30"> | PNG |
| file-word-o | `file-word-o-icon` | [file-word-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-word-o/file-word-o.css) | <img src="icons/file-word-o/file-word-o.png" width="30"> | PNG |
| file-zip-o | `file-zip-o-icon` | [file-zip-o](https://github.com/Dellos7/local-icons/blob/master/icons/file-zip-o/file-zip-o.css) | <img src="icons/file-zip-o/file-zip-o.png" width="30"> | PNG |
| file | `file-icon` | [file](https://github.com/Dellos7/local-icons/blob/master/icons/file/file.css) | <img src="icons/file/file.png" width="30"> | PNG |
| files-o | `files-o-icon` | [files-o](https://github.com/Dellos7/local-icons/blob/master/icons/files-o/files-o.css) | <img src="icons/files-o/files-o.png" width="30"> | PNG |
| film | `film-icon` | [film](https://github.com/Dellos7/local-icons/blob/master/icons/film/film.css) | <img src="icons/film/film.png" width="30"> | PNG |
| filter | `filter-icon` | [filter](https://github.com/Dellos7/local-icons/blob/master/icons/filter/filter.css) | <img src="icons/filter/filter.png" width="30"> | PNG |
| fire-extinguisher | `fire-extinguisher-icon` | [fire-extinguisher](https://github.com/Dellos7/local-icons/blob/master/icons/fire-extinguisher/fire-extinguisher.css) | <img src="icons/fire-extinguisher/fire-extinguisher.png" width="30"> | PNG |
| fire | `fire-icon` | [fire](https://github.com/Dellos7/local-icons/blob/master/icons/fire/fire.css) | <img src="icons/fire/fire.png" width="30"> | PNG |
| firefox | `firefox-icon` | [firefox](https://github.com/Dellos7/local-icons/blob/master/icons/firefox/firefox.css) | <img src="icons/firefox/firefox.png" width="30"> | PNG |
| first-order | `first-order-icon` | [first-order](https://github.com/Dellos7/local-icons/blob/master/icons/first-order/first-order.css) | <img src="icons/first-order/first-order.png" width="30"> | PNG |
| flag-checkered | `flag-checkered-icon` | [flag-checkered](https://github.com/Dellos7/local-icons/blob/master/icons/flag-checkered/flag-checkered.css) | <img src="icons/flag-checkered/flag-checkered.png" width="30"> | PNG |
| flag-o | `flag-o-icon` | [flag-o](https://github.com/Dellos7/local-icons/blob/master/icons/flag-o/flag-o.css) | <img src="icons/flag-o/flag-o.png" width="30"> | PNG |
| flag | `flag-icon` | [flag](https://github.com/Dellos7/local-icons/blob/master/icons/flag/flag.css) | <img src="icons/flag/flag.png" width="30"> | PNG |
| flash | `flash-icon` | [flash](https://github.com/Dellos7/local-icons/blob/master/icons/flash/flash.css) | <img src="icons/flash/flash.png" width="30"> | PNG |
| flask | `flask-icon` | [flask](https://github.com/Dellos7/local-icons/blob/master/icons/flask/flask.css) | <img src="icons/flask/flask.png" width="30"> | PNG |
| flickr | `flickr-icon` | [flickr](https://github.com/Dellos7/local-icons/blob/master/icons/flickr/flickr.css) | <img src="icons/flickr/flickr.png" width="30"> | PNG |
| floppy-o | `floppy-o-icon` | [floppy-o](https://github.com/Dellos7/local-icons/blob/master/icons/floppy-o/floppy-o.css) | <img src="icons/floppy-o/floppy-o.png" width="30"> | PNG |
| folder-o | `folder-o-icon` | [folder-o](https://github.com/Dellos7/local-icons/blob/master/icons/folder-o/folder-o.css) | <img src="icons/folder-o/folder-o.png" width="30"> | PNG |
| folder-open-o | `folder-open-o-icon` | [folder-open-o](https://github.com/Dellos7/local-icons/blob/master/icons/folder-open-o/folder-open-o.css) | <img src="icons/folder-open-o/folder-open-o.png" width="30"> | PNG |
| folder-open | `folder-open-icon` | [folder-open](https://github.com/Dellos7/local-icons/blob/master/icons/folder-open/folder-open.css) | <img src="icons/folder-open/folder-open.png" width="30"> | PNG |
| folder | `folder-icon` | [folder](https://github.com/Dellos7/local-icons/blob/master/icons/folder/folder.css) | <img src="icons/folder/folder.png" width="30"> | PNG |
| font-awesome | `font-awesome-icon` | [font-awesome](https://github.com/Dellos7/local-icons/blob/master/icons/font-awesome/font-awesome.css) | <img src="icons/font-awesome/font-awesome.png" width="30"> | PNG |
| font | `font-icon` | [font](https://github.com/Dellos7/local-icons/blob/master/icons/font/font.css) | <img src="icons/font/font.png" width="30"> | PNG |
| fonticons | `fonticons-icon` | [fonticons](https://github.com/Dellos7/local-icons/blob/master/icons/fonticons/fonticons.css) | <img src="icons/fonticons/fonticons.png" width="30"> | PNG |
| fort-awesome | `fort-awesome-icon` | [fort-awesome](https://github.com/Dellos7/local-icons/blob/master/icons/fort-awesome/fort-awesome.css) | <img src="icons/fort-awesome/fort-awesome.png" width="30"> | PNG |
| forumbee | `forumbee-icon` | [forumbee](https://github.com/Dellos7/local-icons/blob/master/icons/forumbee/forumbee.css) | <img src="icons/forumbee/forumbee.png" width="30"> | PNG |
| forward | `forward-icon` | [forward](https://github.com/Dellos7/local-icons/blob/master/icons/forward/forward.css) | <img src="icons/forward/forward.png" width="30"> | PNG |
| foursquare | `foursquare-icon` | [foursquare](https://github.com/Dellos7/local-icons/blob/master/icons/foursquare/foursquare.css) | <img src="icons/foursquare/foursquare.png" width="30"> | PNG |
| free-code-camp | `free-code-camp-icon` | [free-code-camp](https://github.com/Dellos7/local-icons/blob/master/icons/free-code-camp/free-code-camp.css) | <img src="icons/free-code-camp/free-code-camp.png" width="30"> | PNG |
| frown-o | `frown-o-icon` | [frown-o](https://github.com/Dellos7/local-icons/blob/master/icons/frown-o/frown-o.css) | <img src="icons/frown-o/frown-o.png" width="30"> | PNG |
| futbol-o | `futbol-o-icon` | [futbol-o](https://github.com/Dellos7/local-icons/blob/master/icons/futbol-o/futbol-o.css) | <img src="icons/futbol-o/futbol-o.png" width="30"> | PNG |
| gamepad | `gamepad-icon` | [gamepad](https://github.com/Dellos7/local-icons/blob/master/icons/gamepad/gamepad.css) | <img src="icons/gamepad/gamepad.png" width="30"> | PNG |
| gavel | `gavel-icon` | [gavel](https://github.com/Dellos7/local-icons/blob/master/icons/gavel/gavel.css) | <img src="icons/gavel/gavel.png" width="30"> | PNG |
| gbp | `gbp-icon` | [gbp](https://github.com/Dellos7/local-icons/blob/master/icons/gbp/gbp.css) | <img src="icons/gbp/gbp.png" width="30"> | PNG |
| ge | `ge-icon` | [ge](https://github.com/Dellos7/local-icons/blob/master/icons/ge/ge.css) | <img src="icons/ge/ge.png" width="30"> | PNG |
| gear | `gear-icon` | [gear](https://github.com/Dellos7/local-icons/blob/master/icons/gear/gear.css) | <img src="icons/gear/gear.png" width="30"> | PNG |
| gears | `gears-icon` | [gears](https://github.com/Dellos7/local-icons/blob/master/icons/gears/gears.css) | <img src="icons/gears/gears.png" width="30"> | PNG |
| genderless | `genderless-icon` | [genderless](https://github.com/Dellos7/local-icons/blob/master/icons/genderless/genderless.css) | <img src="icons/genderless/genderless.png" width="30"> | PNG |
| get-pocket | `get-pocket-icon` | [get-pocket](https://github.com/Dellos7/local-icons/blob/master/icons/get-pocket/get-pocket.css) | <img src="icons/get-pocket/get-pocket.png" width="30"> | PNG |
| gg-circle | `gg-circle-icon` | [gg-circle](https://github.com/Dellos7/local-icons/blob/master/icons/gg-circle/gg-circle.css) | <img src="icons/gg-circle/gg-circle.png" width="30"> | PNG |
| gg | `gg-icon` | [gg](https://github.com/Dellos7/local-icons/blob/master/icons/gg/gg.css) | <img src="icons/gg/gg.png" width="30"> | PNG |
| gift | `gift-icon` | [gift](https://github.com/Dellos7/local-icons/blob/master/icons/gift/gift.css) | <img src="icons/gift/gift.png" width="30"> | PNG |
| git-square | `git-square-icon` | [git-square](https://github.com/Dellos7/local-icons/blob/master/icons/git-square/git-square.css) | <img src="icons/git-square/git-square.png" width="30"> | PNG |
| git | `git-icon` | [git](https://github.com/Dellos7/local-icons/blob/master/icons/git/git.css) | <img src="icons/git/git.png" width="30"> | PNG |
| github-alt | `github-alt-icon` | [github-alt](https://github.com/Dellos7/local-icons/blob/master/icons/github-alt/github-alt.css) | <img src="icons/github-alt/github-alt.png" width="30"> | PNG |
| github-square | `github-square-icon` | [github-square](https://github.com/Dellos7/local-icons/blob/master/icons/github-square/github-square.css) | <img src="icons/github-square/github-square.png" width="30"> | PNG |
| github | `github-icon` | [github](https://github.com/Dellos7/local-icons/blob/master/icons/github/github.css) | <img src="icons/github/github.png" width="30"> | PNG |
| gitlab | `gitlab-icon` | [gitlab](https://github.com/Dellos7/local-icons/blob/master/icons/gitlab/gitlab.css) | <img src="icons/gitlab/gitlab.png" width="30"> | PNG |
| gittip | `gittip-icon` | [gittip](https://github.com/Dellos7/local-icons/blob/master/icons/gittip/gittip.css) | <img src="icons/gittip/gittip.png" width="30"> | PNG |
| glass | `glass-icon` | [glass](https://github.com/Dellos7/local-icons/blob/master/icons/glass/glass.css) | <img src="icons/glass/glass.png" width="30"> | PNG |
| glide-g | `glide-g-icon` | [glide-g](https://github.com/Dellos7/local-icons/blob/master/icons/glide-g/glide-g.css) | <img src="icons/glide-g/glide-g.png" width="30"> | PNG |
| glide | `glide-icon` | [glide](https://github.com/Dellos7/local-icons/blob/master/icons/glide/glide.css) | <img src="icons/glide/glide.png" width="30"> | PNG |
| globe | `globe-icon` | [globe](https://github.com/Dellos7/local-icons/blob/master/icons/globe/globe.css) | <img src="icons/globe/globe.png" width="30"> | PNG |
| google-plus-circle | `google-plus-circle-icon` | [google-plus-circle](https://github.com/Dellos7/local-icons/blob/master/icons/google-plus-circle/google-plus-circle.css) | <img src="icons/google-plus-circle/google-plus-circle.png" width="30"> | PNG |
| google-plus-official | `google-plus-official-icon` | [google-plus-official](https://github.com/Dellos7/local-icons/blob/master/icons/google-plus-official/google-plus-official.css) | <img src="icons/google-plus-official/google-plus-official.png" width="30"> | PNG |
| google-plus-square | `google-plus-square-icon` | [google-plus-square](https://github.com/Dellos7/local-icons/blob/master/icons/google-plus-square/google-plus-square.css) | <img src="icons/google-plus-square/google-plus-square.png" width="30"> | PNG |
| google-plus | `google-plus-icon` | [google-plus](https://github.com/Dellos7/local-icons/blob/master/icons/google-plus/google-plus.css) | <img src="icons/google-plus/google-plus.png" width="30"> | PNG |
| google-wallet | `google-wallet-icon` | [google-wallet](https://github.com/Dellos7/local-icons/blob/master/icons/google-wallet/google-wallet.css) | <img src="icons/google-wallet/google-wallet.png" width="30"> | PNG |
| google | `google-icon` | [google](https://github.com/Dellos7/local-icons/blob/master/icons/google/google.css) | <img src="icons/google/google.png" width="30"> | PNG |
| graduation-cap | `graduation-cap-icon` | [graduation-cap](https://github.com/Dellos7/local-icons/blob/master/icons/graduation-cap/graduation-cap.css) | <img src="icons/graduation-cap/graduation-cap.png" width="30"> | PNG |
| gratipay | `gratipay-icon` | [gratipay](https://github.com/Dellos7/local-icons/blob/master/icons/gratipay/gratipay.css) | <img src="icons/gratipay/gratipay.png" width="30"> | PNG |
| grav | `grav-icon` | [grav](https://github.com/Dellos7/local-icons/blob/master/icons/grav/grav.css) | <img src="icons/grav/grav.png" width="30"> | PNG |
| group | `group-icon` | [group](https://github.com/Dellos7/local-icons/blob/master/icons/group/group.css) | <img src="icons/group/group.png" width="30"> | PNG |
| h-square | `h-square-icon` | [h-square](https://github.com/Dellos7/local-icons/blob/master/icons/h-square/h-square.css) | <img src="icons/h-square/h-square.png" width="30"> | PNG |
| hacker-news | `hacker-news-icon` | [hacker-news](https://github.com/Dellos7/local-icons/blob/master/icons/hacker-news/hacker-news.css) | <img src="icons/hacker-news/hacker-news.png" width="30"> | PNG |
| hand-grab-o | `hand-grab-o-icon` | [hand-grab-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-grab-o/hand-grab-o.css) | <img src="icons/hand-grab-o/hand-grab-o.png" width="30"> | PNG |
| hand-lizard-o | `hand-lizard-o-icon` | [hand-lizard-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-lizard-o/hand-lizard-o.css) | <img src="icons/hand-lizard-o/hand-lizard-o.png" width="30"> | PNG |
| hand-o-down | `hand-o-down-icon` | [hand-o-down](https://github.com/Dellos7/local-icons/blob/master/icons/hand-o-down/hand-o-down.css) | <img src="icons/hand-o-down/hand-o-down.png" width="30"> | PNG |
| hand-o-left | `hand-o-left-icon` | [hand-o-left](https://github.com/Dellos7/local-icons/blob/master/icons/hand-o-left/hand-o-left.css) | <img src="icons/hand-o-left/hand-o-left.png" width="30"> | PNG |
| hand-o-right | `hand-o-right-icon` | [hand-o-right](https://github.com/Dellos7/local-icons/blob/master/icons/hand-o-right/hand-o-right.css) | <img src="icons/hand-o-right/hand-o-right.png" width="30"> | PNG |
| hand-o-up | `hand-o-up-icon` | [hand-o-up](https://github.com/Dellos7/local-icons/blob/master/icons/hand-o-up/hand-o-up.css) | <img src="icons/hand-o-up/hand-o-up.png" width="30"> | PNG |
| hand-paper-o | `hand-paper-o-icon` | [hand-paper-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-paper-o/hand-paper-o.css) | <img src="icons/hand-paper-o/hand-paper-o.png" width="30"> | PNG |
| hand-peace-o | `hand-peace-o-icon` | [hand-peace-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-peace-o/hand-peace-o.css) | <img src="icons/hand-peace-o/hand-peace-o.png" width="30"> | PNG |
| hand-pointer-o | `hand-pointer-o-icon` | [hand-pointer-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-pointer-o/hand-pointer-o.css) | <img src="icons/hand-pointer-o/hand-pointer-o.png" width="30"> | PNG |
| hand-rock-o | `hand-rock-o-icon` | [hand-rock-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-rock-o/hand-rock-o.css) | <img src="icons/hand-rock-o/hand-rock-o.png" width="30"> | PNG |
| hand-scissors-o | `hand-scissors-o-icon` | [hand-scissors-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-scissors-o/hand-scissors-o.css) | <img src="icons/hand-scissors-o/hand-scissors-o.png" width="30"> | PNG |
| hand-spock-o | `hand-spock-o-icon` | [hand-spock-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-spock-o/hand-spock-o.css) | <img src="icons/hand-spock-o/hand-spock-o.png" width="30"> | PNG |
| hand-stop-o | `hand-stop-o-icon` | [hand-stop-o](https://github.com/Dellos7/local-icons/blob/master/icons/hand-stop-o/hand-stop-o.css) | <img src="icons/hand-stop-o/hand-stop-o.png" width="30"> | PNG |
| handshake-o | `handshake-o-icon` | [handshake-o](https://github.com/Dellos7/local-icons/blob/master/icons/handshake-o/handshake-o.css) | <img src="icons/handshake-o/handshake-o.png" width="30"> | PNG |
| hard-of-hearing | `hard-of-hearing-icon` | [hard-of-hearing](https://github.com/Dellos7/local-icons/blob/master/icons/hard-of-hearing/hard-of-hearing.css) | <img src="icons/hard-of-hearing/hard-of-hearing.png" width="30"> | PNG |
| hashtag | `hashtag-icon` | [hashtag](https://github.com/Dellos7/local-icons/blob/master/icons/hashtag/hashtag.css) | <img src="icons/hashtag/hashtag.png" width="30"> | PNG |
| hdd-o | `hdd-o-icon` | [hdd-o](https://github.com/Dellos7/local-icons/blob/master/icons/hdd-o/hdd-o.css) | <img src="icons/hdd-o/hdd-o.png" width="30"> | PNG |
| header | `header-icon` | [header](https://github.com/Dellos7/local-icons/blob/master/icons/header/header.css) | <img src="icons/header/header.png" width="30"> | PNG |
| headphones | `headphones-icon` | [headphones](https://github.com/Dellos7/local-icons/blob/master/icons/headphones/headphones.css) | <img src="icons/headphones/headphones.png" width="30"> | PNG |
| heart-o | `heart-o-icon` | [heart-o](https://github.com/Dellos7/local-icons/blob/master/icons/heart-o/heart-o.css) | <img src="icons/heart-o/heart-o.png" width="30"> | PNG |
| heart | `heart-icon` | [heart](https://github.com/Dellos7/local-icons/blob/master/icons/heart/heart.css) | <img src="icons/heart/heart.png" width="30"> | PNG |
| heartbeat | `heartbeat-icon` | [heartbeat](https://github.com/Dellos7/local-icons/blob/master/icons/heartbeat/heartbeat.css) | <img src="icons/heartbeat/heartbeat.png" width="30"> | PNG |
| history | `history-icon` | [history](https://github.com/Dellos7/local-icons/blob/master/icons/history/history.css) | <img src="icons/history/history.png" width="30"> | PNG |
| home | `home-icon` | [home](https://github.com/Dellos7/local-icons/blob/master/icons/home/home.css) | <img src="icons/home/home.png" width="30"> | PNG |
| hospital-o | `hospital-o-icon` | [hospital-o](https://github.com/Dellos7/local-icons/blob/master/icons/hospital-o/hospital-o.css) | <img src="icons/hospital-o/hospital-o.png" width="30"> | PNG |
| hotel | `hotel-icon` | [hotel](https://github.com/Dellos7/local-icons/blob/master/icons/hotel/hotel.css) | <img src="icons/hotel/hotel.png" width="30"> | PNG |
| hourglass-1 | `hourglass-1-icon` | [hourglass-1](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-1/hourglass-1.css) | <img src="icons/hourglass-1/hourglass-1.png" width="30"> | PNG |
| hourglass-2 | `hourglass-2-icon` | [hourglass-2](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-2/hourglass-2.css) | <img src="icons/hourglass-2/hourglass-2.png" width="30"> | PNG |
| hourglass-3 | `hourglass-3-icon` | [hourglass-3](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-3/hourglass-3.css) | <img src="icons/hourglass-3/hourglass-3.png" width="30"> | PNG |
| hourglass-end | `hourglass-end-icon` | [hourglass-end](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-end/hourglass-end.css) | <img src="icons/hourglass-end/hourglass-end.png" width="30"> | PNG |
| hourglass-half | `hourglass-half-icon` | [hourglass-half](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-half/hourglass-half.css) | <img src="icons/hourglass-half/hourglass-half.png" width="30"> | PNG |
| hourglass-o | `hourglass-o-icon` | [hourglass-o](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-o/hourglass-o.css) | <img src="icons/hourglass-o/hourglass-o.png" width="30"> | PNG |
| hourglass-start | `hourglass-start-icon` | [hourglass-start](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass-start/hourglass-start.css) | <img src="icons/hourglass-start/hourglass-start.png" width="30"> | PNG |
| hourglass | `hourglass-icon` | [hourglass](https://github.com/Dellos7/local-icons/blob/master/icons/hourglass/hourglass.css) | <img src="icons/hourglass/hourglass.png" width="30"> | PNG |
| houzz | `houzz-icon` | [houzz](https://github.com/Dellos7/local-icons/blob/master/icons/houzz/houzz.css) | <img src="icons/houzz/houzz.png" width="30"> | PNG |
| html5 | `html5-icon` | [html5](https://github.com/Dellos7/local-icons/blob/master/icons/html5/html5.css) | <img src="icons/html5/html5.png" width="30"> | PNG |
| i-cursor | `i-cursor-icon` | [i-cursor](https://github.com/Dellos7/local-icons/blob/master/icons/i-cursor/i-cursor.css) | <img src="icons/i-cursor/i-cursor.png" width="30"> | PNG |
| id-badge | `id-badge-icon` | [id-badge](https://github.com/Dellos7/local-icons/blob/master/icons/id-badge/id-badge.css) | <img src="icons/id-badge/id-badge.png" width="30"> | PNG |
| id-card-o | `id-card-o-icon` | [id-card-o](https://github.com/Dellos7/local-icons/blob/master/icons/id-card-o/id-card-o.css) | <img src="icons/id-card-o/id-card-o.png" width="30"> | PNG |
| id-card | `id-card-icon` | [id-card](https://github.com/Dellos7/local-icons/blob/master/icons/id-card/id-card.css) | <img src="icons/id-card/id-card.png" width="30"> | PNG |
| ils | `ils-icon` | [ils](https://github.com/Dellos7/local-icons/blob/master/icons/ils/ils.css) | <img src="icons/ils/ils.png" width="30"> | PNG |
| image | `image-icon` | [image](https://github.com/Dellos7/local-icons/blob/master/icons/image/image.css) | <img src="icons/image/image.png" width="30"> | PNG |
| imdb | `imdb-icon` | [imdb](https://github.com/Dellos7/local-icons/blob/master/icons/imdb/imdb.css) | <img src="icons/imdb/imdb.png" width="30"> | PNG |
| inbox | `inbox-icon` | [inbox](https://github.com/Dellos7/local-icons/blob/master/icons/inbox/inbox.css) | <img src="icons/inbox/inbox.png" width="30"> | PNG |
| indent | `indent-icon` | [indent](https://github.com/Dellos7/local-icons/blob/master/icons/indent/indent.css) | <img src="icons/indent/indent.png" width="30"> | PNG |
| industry | `industry-icon` | [industry](https://github.com/Dellos7/local-icons/blob/master/icons/industry/industry.css) | <img src="icons/industry/industry.png" width="30"> | PNG |
| info-circle | `info-circle-icon` | [info-circle](https://github.com/Dellos7/local-icons/blob/master/icons/info-circle/info-circle.css) | <img src="icons/info-circle/info-circle.png" width="30"> | PNG |
| info | `info-icon` | [info](https://github.com/Dellos7/local-icons/blob/master/icons/info/info.css) | <img src="icons/info/info.png" width="30"> | PNG |
| inr | `inr-icon` | [inr](https://github.com/Dellos7/local-icons/blob/master/icons/inr/inr.css) | <img src="icons/inr/inr.png" width="30"> | PNG |
| instagram | `instagram-icon` | [instagram](https://github.com/Dellos7/local-icons/blob/master/icons/instagram/instagram.css) | <img src="icons/instagram/instagram.png" width="30"> | PNG |
| institution | `institution-icon` | [institution](https://github.com/Dellos7/local-icons/blob/master/icons/institution/institution.css) | <img src="icons/institution/institution.png" width="30"> | PNG |
| internet-explorer | `internet-explorer-icon` | [internet-explorer](https://github.com/Dellos7/local-icons/blob/master/icons/internet-explorer/internet-explorer.css) | <img src="icons/internet-explorer/internet-explorer.png" width="30"> | PNG |
| intersex | `intersex-icon` | [intersex](https://github.com/Dellos7/local-icons/blob/master/icons/intersex/intersex.css) | <img src="icons/intersex/intersex.png" width="30"> | PNG |
| ioxhost | `ioxhost-icon` | [ioxhost](https://github.com/Dellos7/local-icons/blob/master/icons/ioxhost/ioxhost.css) | <img src="icons/ioxhost/ioxhost.png" width="30"> | PNG |
| italic | `italic-icon` | [italic](https://github.com/Dellos7/local-icons/blob/master/icons/italic/italic.css) | <img src="icons/italic/italic.png" width="30"> | PNG |
| joomla | `joomla-icon` | [joomla](https://github.com/Dellos7/local-icons/blob/master/icons/joomla/joomla.css) | <img src="icons/joomla/joomla.png" width="30"> | PNG |
| jpy | `jpy-icon` | [jpy](https://github.com/Dellos7/local-icons/blob/master/icons/jpy/jpy.css) | <img src="icons/jpy/jpy.png" width="30"> | PNG |
| jsfiddle | `jsfiddle-icon` | [jsfiddle](https://github.com/Dellos7/local-icons/blob/master/icons/jsfiddle/jsfiddle.css) | <img src="icons/jsfiddle/jsfiddle.png" width="30"> | PNG |
| key | `key-icon` | [key](https://github.com/Dellos7/local-icons/blob/master/icons/key/key.css) | <img src="icons/key/key.png" width="30"> | PNG |
| keyboard-o | `keyboard-o-icon` | [keyboard-o](https://github.com/Dellos7/local-icons/blob/master/icons/keyboard-o/keyboard-o.css) | <img src="icons/keyboard-o/keyboard-o.png" width="30"> | PNG |
| krw | `krw-icon` | [krw](https://github.com/Dellos7/local-icons/blob/master/icons/krw/krw.css) | <img src="icons/krw/krw.png" width="30"> | PNG |
| language | `language-icon` | [language](https://github.com/Dellos7/local-icons/blob/master/icons/language/language.css) | <img src="icons/language/language.png" width="30"> | PNG |
| laptop | `laptop-icon` | [laptop](https://github.com/Dellos7/local-icons/blob/master/icons/laptop/laptop.css) | <img src="icons/laptop/laptop.png" width="30"> | PNG |
| lastfm-square | `lastfm-square-icon` | [lastfm-square](https://github.com/Dellos7/local-icons/blob/master/icons/lastfm-square/lastfm-square.css) | <img src="icons/lastfm-square/lastfm-square.png" width="30"> | PNG |
| lastfm | `lastfm-icon` | [lastfm](https://github.com/Dellos7/local-icons/blob/master/icons/lastfm/lastfm.css) | <img src="icons/lastfm/lastfm.png" width="30"> | PNG |
| leaf | `leaf-icon` | [leaf](https://github.com/Dellos7/local-icons/blob/master/icons/leaf/leaf.css) | <img src="icons/leaf/leaf.png" width="30"> | PNG |
| leanpub | `leanpub-icon` | [leanpub](https://github.com/Dellos7/local-icons/blob/master/icons/leanpub/leanpub.css) | <img src="icons/leanpub/leanpub.png" width="30"> | PNG |
| legal | `legal-icon` | [legal](https://github.com/Dellos7/local-icons/blob/master/icons/legal/legal.css) | <img src="icons/legal/legal.png" width="30"> | PNG |
| lemon-o | `lemon-o-icon` | [lemon-o](https://github.com/Dellos7/local-icons/blob/master/icons/lemon-o/lemon-o.css) | <img src="icons/lemon-o/lemon-o.png" width="30"> | PNG |
| level-down | `level-down-icon` | [level-down](https://github.com/Dellos7/local-icons/blob/master/icons/level-down/level-down.css) | <img src="icons/level-down/level-down.png" width="30"> | PNG |
| level-up | `level-up-icon` | [level-up](https://github.com/Dellos7/local-icons/blob/master/icons/level-up/level-up.css) | <img src="icons/level-up/level-up.png" width="30"> | PNG |
| life-bouy | `life-bouy-icon` | [life-bouy](https://github.com/Dellos7/local-icons/blob/master/icons/life-bouy/life-bouy.css) | <img src="icons/life-bouy/life-bouy.png" width="30"> | PNG |
| life-buoy | `life-buoy-icon` | [life-buoy](https://github.com/Dellos7/local-icons/blob/master/icons/life-buoy/life-buoy.css) | <img src="icons/life-buoy/life-buoy.png" width="30"> | PNG |
| life-ring | `life-ring-icon` | [life-ring](https://github.com/Dellos7/local-icons/blob/master/icons/life-ring/life-ring.css) | <img src="icons/life-ring/life-ring.png" width="30"> | PNG |
| life-saver | `life-saver-icon` | [life-saver](https://github.com/Dellos7/local-icons/blob/master/icons/life-saver/life-saver.css) | <img src="icons/life-saver/life-saver.png" width="30"> | PNG |
| lightbulb-o | `lightbulb-o-icon` | [lightbulb-o](https://github.com/Dellos7/local-icons/blob/master/icons/lightbulb-o/lightbulb-o.css) | <img src="icons/lightbulb-o/lightbulb-o.png" width="30"> | PNG |
| line-chart | `line-chart-icon` | [line-chart](https://github.com/Dellos7/local-icons/blob/master/icons/line-chart/line-chart.css) | <img src="icons/line-chart/line-chart.png" width="30"> | PNG |
| link | `link-icon` | [link](https://github.com/Dellos7/local-icons/blob/master/icons/link/link.css) | <img src="icons/link/link.png" width="30"> | PNG |
| linkedin-square | `linkedin-square-icon` | [linkedin-square](https://github.com/Dellos7/local-icons/blob/master/icons/linkedin-square/linkedin-square.css) | <img src="icons/linkedin-square/linkedin-square.png" width="30"> | PNG |
| linkedin | `linkedin-icon` | [linkedin](https://github.com/Dellos7/local-icons/blob/master/icons/linkedin/linkedin.css) | <img src="icons/linkedin/linkedin.png" width="30"> | PNG |
| linode | `linode-icon` | [linode](https://github.com/Dellos7/local-icons/blob/master/icons/linode/linode.css) | <img src="icons/linode/linode.png" width="30"> | PNG |
| linux | `linux-icon` | [linux](https://github.com/Dellos7/local-icons/blob/master/icons/linux/linux.css) | <img src="icons/linux/linux.png" width="30"> | PNG |
| list-alt | `list-alt-icon` | [list-alt](https://github.com/Dellos7/local-icons/blob/master/icons/list-alt/list-alt.css) | <img src="icons/list-alt/list-alt.png" width="30"> | PNG |
| list-ol | `list-ol-icon` | [list-ol](https://github.com/Dellos7/local-icons/blob/master/icons/list-ol/list-ol.css) | <img src="icons/list-ol/list-ol.png" width="30"> | PNG |
| list-ul | `list-ul-icon` | [list-ul](https://github.com/Dellos7/local-icons/blob/master/icons/list-ul/list-ul.css) | <img src="icons/list-ul/list-ul.png" width="30"> | PNG |
| list | `list-icon` | [list](https://github.com/Dellos7/local-icons/blob/master/icons/list/list.css) | <img src="icons/list/list.png" width="30"> | PNG |
| location-arrow | `location-arrow-icon` | [location-arrow](https://github.com/Dellos7/local-icons/blob/master/icons/location-arrow/location-arrow.css) | <img src="icons/location-arrow/location-arrow.png" width="30"> | PNG |
| lock | `lock-icon` | [lock](https://github.com/Dellos7/local-icons/blob/master/icons/lock/lock.css) | <img src="icons/lock/lock.png" width="30"> | PNG |
| long-arrow-down | `long-arrow-down-icon` | [long-arrow-down](https://github.com/Dellos7/local-icons/blob/master/icons/long-arrow-down/long-arrow-down.css) | <img src="icons/long-arrow-down/long-arrow-down.png" width="30"> | PNG |
| long-arrow-left | `long-arrow-left-icon` | [long-arrow-left](https://github.com/Dellos7/local-icons/blob/master/icons/long-arrow-left/long-arrow-left.css) | <img src="icons/long-arrow-left/long-arrow-left.png" width="30"> | PNG |
| long-arrow-right | `long-arrow-right-icon` | [long-arrow-right](https://github.com/Dellos7/local-icons/blob/master/icons/long-arrow-right/long-arrow-right.css) | <img src="icons/long-arrow-right/long-arrow-right.png" width="30"> | PNG |
| long-arrow-up | `long-arrow-up-icon` | [long-arrow-up](https://github.com/Dellos7/local-icons/blob/master/icons/long-arrow-up/long-arrow-up.css) | <img src="icons/long-arrow-up/long-arrow-up.png" width="30"> | PNG |
| low-vision | `low-vision-icon` | [low-vision](https://github.com/Dellos7/local-icons/blob/master/icons/low-vision/low-vision.css) | <img src="icons/low-vision/low-vision.png" width="30"> | PNG |
| magic | `magic-icon` | [magic](https://github.com/Dellos7/local-icons/blob/master/icons/magic/magic.css) | <img src="icons/magic/magic.png" width="30"> | PNG |
| magnet | `magnet-icon` | [magnet](https://github.com/Dellos7/local-icons/blob/master/icons/magnet/magnet.css) | <img src="icons/magnet/magnet.png" width="30"> | PNG |
| mail-forward | `mail-forward-icon` | [mail-forward](https://github.com/Dellos7/local-icons/blob/master/icons/mail-forward/mail-forward.css) | <img src="icons/mail-forward/mail-forward.png" width="30"> | PNG |
| mail-reply-all | `mail-reply-all-icon` | [mail-reply-all](https://github.com/Dellos7/local-icons/blob/master/icons/mail-reply-all/mail-reply-all.css) | <img src="icons/mail-reply-all/mail-reply-all.png" width="30"> | PNG |
| mail-reply | `mail-reply-icon` | [mail-reply](https://github.com/Dellos7/local-icons/blob/master/icons/mail-reply/mail-reply.css) | <img src="icons/mail-reply/mail-reply.png" width="30"> | PNG |
| male | `male-icon` | [male](https://github.com/Dellos7/local-icons/blob/master/icons/male/male.css) | <img src="icons/male/male.png" width="30"> | PNG |
| map-marker | `map-marker-icon` | [map-marker](https://github.com/Dellos7/local-icons/blob/master/icons/map-marker/map-marker.css) | <img src="icons/map-marker/map-marker.png" width="30"> | PNG |
| map-o | `map-o-icon` | [map-o](https://github.com/Dellos7/local-icons/blob/master/icons/map-o/map-o.css) | <img src="icons/map-o/map-o.png" width="30"> | PNG |
| map-pin | `map-pin-icon` | [map-pin](https://github.com/Dellos7/local-icons/blob/master/icons/map-pin/map-pin.css) | <img src="icons/map-pin/map-pin.png" width="30"> | PNG |
| map-signs | `map-signs-icon` | [map-signs](https://github.com/Dellos7/local-icons/blob/master/icons/map-signs/map-signs.css) | <img src="icons/map-signs/map-signs.png" width="30"> | PNG |
| map | `map-icon` | [map](https://github.com/Dellos7/local-icons/blob/master/icons/map/map.css) | <img src="icons/map/map.png" width="30"> | PNG |
| mars-double | `mars-double-icon` | [mars-double](https://github.com/Dellos7/local-icons/blob/master/icons/mars-double/mars-double.css) | <img src="icons/mars-double/mars-double.png" width="30"> | PNG |
| mars-stroke-h | `mars-stroke-h-icon` | [mars-stroke-h](https://github.com/Dellos7/local-icons/blob/master/icons/mars-stroke-h/mars-stroke-h.css) | <img src="icons/mars-stroke-h/mars-stroke-h.png" width="30"> | PNG |
| mars-stroke-v | `mars-stroke-v-icon` | [mars-stroke-v](https://github.com/Dellos7/local-icons/blob/master/icons/mars-stroke-v/mars-stroke-v.css) | <img src="icons/mars-stroke-v/mars-stroke-v.png" width="30"> | PNG |
| mars-stroke | `mars-stroke-icon` | [mars-stroke](https://github.com/Dellos7/local-icons/blob/master/icons/mars-stroke/mars-stroke.css) | <img src="icons/mars-stroke/mars-stroke.png" width="30"> | PNG |
| mars | `mars-icon` | [mars](https://github.com/Dellos7/local-icons/blob/master/icons/mars/mars.css) | <img src="icons/mars/mars.png" width="30"> | PNG |
| maxcdn | `maxcdn-icon` | [maxcdn](https://github.com/Dellos7/local-icons/blob/master/icons/maxcdn/maxcdn.css) | <img src="icons/maxcdn/maxcdn.png" width="30"> | PNG |
| meanpath | `meanpath-icon` | [meanpath](https://github.com/Dellos7/local-icons/blob/master/icons/meanpath/meanpath.css) | <img src="icons/meanpath/meanpath.png" width="30"> | PNG |
| medium | `medium-icon` | [medium](https://github.com/Dellos7/local-icons/blob/master/icons/medium/medium.css) | <img src="icons/medium/medium.png" width="30"> | PNG |
| medkit | `medkit-icon` | [medkit](https://github.com/Dellos7/local-icons/blob/master/icons/medkit/medkit.css) | <img src="icons/medkit/medkit.png" width="30"> | PNG |
| meetup | `meetup-icon` | [meetup](https://github.com/Dellos7/local-icons/blob/master/icons/meetup/meetup.css) | <img src="icons/meetup/meetup.png" width="30"> | PNG |
| meh-o | `meh-o-icon` | [meh-o](https://github.com/Dellos7/local-icons/blob/master/icons/meh-o/meh-o.css) | <img src="icons/meh-o/meh-o.png" width="30"> | PNG |
| mercury | `mercury-icon` | [mercury](https://github.com/Dellos7/local-icons/blob/master/icons/mercury/mercury.css) | <img src="icons/mercury/mercury.png" width="30"> | PNG |
| microchip | `microchip-icon` | [microchip](https://github.com/Dellos7/local-icons/blob/master/icons/microchip/microchip.css) | <img src="icons/microchip/microchip.png" width="30"> | PNG |
| microphone-slash | `microphone-slash-icon` | [microphone-slash](https://github.com/Dellos7/local-icons/blob/master/icons/microphone-slash/microphone-slash.css) | <img src="icons/microphone-slash/microphone-slash.png" width="30"> | PNG |
| microphone | `microphone-icon` | [microphone](https://github.com/Dellos7/local-icons/blob/master/icons/microphone/microphone.css) | <img src="icons/microphone/microphone.png" width="30"> | PNG |
| minus-circle | `minus-circle-icon` | [minus-circle](https://github.com/Dellos7/local-icons/blob/master/icons/minus-circle/minus-circle.css) | <img src="icons/minus-circle/minus-circle.png" width="30"> | PNG |
| minus-square-o | `minus-square-o-icon` | [minus-square-o](https://github.com/Dellos7/local-icons/blob/master/icons/minus-square-o/minus-square-o.css) | <img src="icons/minus-square-o/minus-square-o.png" width="30"> | PNG |
| minus-square | `minus-square-icon` | [minus-square](https://github.com/Dellos7/local-icons/blob/master/icons/minus-square/minus-square.css) | <img src="icons/minus-square/minus-square.png" width="30"> | PNG |
| minus | `minus-icon` | [minus](https://github.com/Dellos7/local-icons/blob/master/icons/minus/minus.css) | <img src="icons/minus/minus.png" width="30"> | PNG |
| mixcloud | `mixcloud-icon` | [mixcloud](https://github.com/Dellos7/local-icons/blob/master/icons/mixcloud/mixcloud.css) | <img src="icons/mixcloud/mixcloud.png" width="30"> | PNG |
| mobile-phone | `mobile-phone-icon` | [mobile-phone](https://github.com/Dellos7/local-icons/blob/master/icons/mobile-phone/mobile-phone.css) | <img src="icons/mobile-phone/mobile-phone.png" width="30"> | PNG |
| mobile | `mobile-icon` | [mobile](https://github.com/Dellos7/local-icons/blob/master/icons/mobile/mobile.css) | <img src="icons/mobile/mobile.png" width="30"> | PNG |
| modx | `modx-icon` | [modx](https://github.com/Dellos7/local-icons/blob/master/icons/modx/modx.css) | <img src="icons/modx/modx.png" width="30"> | PNG |
| money | `money-icon` | [money](https://github.com/Dellos7/local-icons/blob/master/icons/money/money.css) | <img src="icons/money/money.png" width="30"> | PNG |
| moon-o | `moon-o-icon` | [moon-o](https://github.com/Dellos7/local-icons/blob/master/icons/moon-o/moon-o.css) | <img src="icons/moon-o/moon-o.png" width="30"> | PNG |
| mortar-board | `mortar-board-icon` | [mortar-board](https://github.com/Dellos7/local-icons/blob/master/icons/mortar-board/mortar-board.css) | <img src="icons/mortar-board/mortar-board.png" width="30"> | PNG |
| motorcycle | `motorcycle-icon` | [motorcycle](https://github.com/Dellos7/local-icons/blob/master/icons/motorcycle/motorcycle.css) | <img src="icons/motorcycle/motorcycle.png" width="30"> | PNG |
| mouse-pointer | `mouse-pointer-icon` | [mouse-pointer](https://github.com/Dellos7/local-icons/blob/master/icons/mouse-pointer/mouse-pointer.css) | <img src="icons/mouse-pointer/mouse-pointer.png" width="30"> | PNG |
| music | `music-icon` | [music](https://github.com/Dellos7/local-icons/blob/master/icons/music/music.css) | <img src="icons/music/music.png" width="30"> | PNG |
| navicon | `navicon-icon` | [navicon](https://github.com/Dellos7/local-icons/blob/master/icons/navicon/navicon.css) | <img src="icons/navicon/navicon.png" width="30"> | PNG |
| neuter | `neuter-icon` | [neuter](https://github.com/Dellos7/local-icons/blob/master/icons/neuter/neuter.css) | <img src="icons/neuter/neuter.png" width="30"> | PNG |
| newspaper-o | `newspaper-o-icon` | [newspaper-o](https://github.com/Dellos7/local-icons/blob/master/icons/newspaper-o/newspaper-o.css) | <img src="icons/newspaper-o/newspaper-o.png" width="30"> | PNG |
| object-group | `object-group-icon` | [object-group](https://github.com/Dellos7/local-icons/blob/master/icons/object-group/object-group.css) | <img src="icons/object-group/object-group.png" width="30"> | PNG |
| object-ungroup | `object-ungroup-icon` | [object-ungroup](https://github.com/Dellos7/local-icons/blob/master/icons/object-ungroup/object-ungroup.css) | <img src="icons/object-ungroup/object-ungroup.png" width="30"> | PNG |
| odnoklassniki-square | `odnoklassniki-square-icon` | [odnoklassniki-square](https://github.com/Dellos7/local-icons/blob/master/icons/odnoklassniki-square/odnoklassniki-square.css) | <img src="icons/odnoklassniki-square/odnoklassniki-square.png" width="30"> | PNG |
| odnoklassniki | `odnoklassniki-icon` | [odnoklassniki](https://github.com/Dellos7/local-icons/blob/master/icons/odnoklassniki/odnoklassniki.css) | <img src="icons/odnoklassniki/odnoklassniki.png" width="30"> | PNG |
| opencart | `opencart-icon` | [opencart](https://github.com/Dellos7/local-icons/blob/master/icons/opencart/opencart.css) | <img src="icons/opencart/opencart.png" width="30"> | PNG |
| openid | `openid-icon` | [openid](https://github.com/Dellos7/local-icons/blob/master/icons/openid/openid.css) | <img src="icons/openid/openid.png" width="30"> | PNG |
| opera | `opera-icon` | [opera](https://github.com/Dellos7/local-icons/blob/master/icons/opera/opera.css) | <img src="icons/opera/opera.png" width="30"> | PNG |
| optin-monster | `optin-monster-icon` | [optin-monster](https://github.com/Dellos7/local-icons/blob/master/icons/optin-monster/optin-monster.css) | <img src="icons/optin-monster/optin-monster.png" width="30"> | PNG |
| outdent | `outdent-icon` | [outdent](https://github.com/Dellos7/local-icons/blob/master/icons/outdent/outdent.css) | <img src="icons/outdent/outdent.png" width="30"> | PNG |
| pagelines | `pagelines-icon` | [pagelines](https://github.com/Dellos7/local-icons/blob/master/icons/pagelines/pagelines.css) | <img src="icons/pagelines/pagelines.png" width="30"> | PNG |
| paint-brush | `paint-brush-icon` | [paint-brush](https://github.com/Dellos7/local-icons/blob/master/icons/paint-brush/paint-brush.css) | <img src="icons/paint-brush/paint-brush.png" width="30"> | PNG |
| paper-plane-o | `paper-plane-o-icon` | [paper-plane-o](https://github.com/Dellos7/local-icons/blob/master/icons/paper-plane-o/paper-plane-o.css) | <img src="icons/paper-plane-o/paper-plane-o.png" width="30"> | PNG |
| paper-plane | `paper-plane-icon` | [paper-plane](https://github.com/Dellos7/local-icons/blob/master/icons/paper-plane/paper-plane.css) | <img src="icons/paper-plane/paper-plane.png" width="30"> | PNG |
| paperclip | `paperclip-icon` | [paperclip](https://github.com/Dellos7/local-icons/blob/master/icons/paperclip/paperclip.css) | <img src="icons/paperclip/paperclip.png" width="30"> | PNG |
| paragraph | `paragraph-icon` | [paragraph](https://github.com/Dellos7/local-icons/blob/master/icons/paragraph/paragraph.css) | <img src="icons/paragraph/paragraph.png" width="30"> | PNG |
| paste | `paste-icon` | [paste](https://github.com/Dellos7/local-icons/blob/master/icons/paste/paste.css) | <img src="icons/paste/paste.png" width="30"> | PNG |
| pause-circle-o | `pause-circle-o-icon` | [pause-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/pause-circle-o/pause-circle-o.css) | <img src="icons/pause-circle-o/pause-circle-o.png" width="30"> | PNG |
| pause-circle | `pause-circle-icon` | [pause-circle](https://github.com/Dellos7/local-icons/blob/master/icons/pause-circle/pause-circle.css) | <img src="icons/pause-circle/pause-circle.png" width="30"> | PNG |
| pause | `pause-icon` | [pause](https://github.com/Dellos7/local-icons/blob/master/icons/pause/pause.css) | <img src="icons/pause/pause.png" width="30"> | PNG |
| paw | `paw-icon` | [paw](https://github.com/Dellos7/local-icons/blob/master/icons/paw/paw.css) | <img src="icons/paw/paw.png" width="30"> | PNG |
| paypal | `paypal-icon` | [paypal](https://github.com/Dellos7/local-icons/blob/master/icons/paypal/paypal.css) | <img src="icons/paypal/paypal.png" width="30"> | PNG |
| pencil-square-o | `pencil-square-o-icon` | [pencil-square-o](https://github.com/Dellos7/local-icons/blob/master/icons/pencil-square-o/pencil-square-o.css) | <img src="icons/pencil-square-o/pencil-square-o.png" width="30"> | PNG |
| pencil-square | `pencil-square-icon` | [pencil-square](https://github.com/Dellos7/local-icons/blob/master/icons/pencil-square/pencil-square.css) | <img src="icons/pencil-square/pencil-square.png" width="30"> | PNG |
| pencil | `pencil-icon` | [pencil](https://github.com/Dellos7/local-icons/blob/master/icons/pencil/pencil.css) | <img src="icons/pencil/pencil.png" width="30"> | PNG |
| percent | `percent-icon` | [percent](https://github.com/Dellos7/local-icons/blob/master/icons/percent/percent.css) | <img src="icons/percent/percent.png" width="30"> | PNG |
| phone-square | `phone-square-icon` | [phone-square](https://github.com/Dellos7/local-icons/blob/master/icons/phone-square/phone-square.css) | <img src="icons/phone-square/phone-square.png" width="30"> | PNG |
| phone | `phone-icon` | [phone](https://github.com/Dellos7/local-icons/blob/master/icons/phone/phone.css) | <img src="icons/phone/phone.png" width="30"> | PNG |
| photo | `photo-icon` | [photo](https://github.com/Dellos7/local-icons/blob/master/icons/photo/photo.css) | <img src="icons/photo/photo.png" width="30"> | PNG |
| picture-o | `picture-o-icon` | [picture-o](https://github.com/Dellos7/local-icons/blob/master/icons/picture-o/picture-o.css) | <img src="icons/picture-o/picture-o.png" width="30"> | PNG |
| pie-chart | `pie-chart-icon` | [pie-chart](https://github.com/Dellos7/local-icons/blob/master/icons/pie-chart/pie-chart.css) | <img src="icons/pie-chart/pie-chart.png" width="30"> | PNG |
| pied-piper-alt | `pied-piper-alt-icon` | [pied-piper-alt](https://github.com/Dellos7/local-icons/blob/master/icons/pied-piper-alt/pied-piper-alt.css) | <img src="icons/pied-piper-alt/pied-piper-alt.png" width="30"> | PNG |
| pied-piper-pp | `pied-piper-pp-icon` | [pied-piper-pp](https://github.com/Dellos7/local-icons/blob/master/icons/pied-piper-pp/pied-piper-pp.css) | <img src="icons/pied-piper-pp/pied-piper-pp.png" width="30"> | PNG |
| pied-piper | `pied-piper-icon` | [pied-piper](https://github.com/Dellos7/local-icons/blob/master/icons/pied-piper/pied-piper.css) | <img src="icons/pied-piper/pied-piper.png" width="30"> | PNG |
| pinterest-p | `pinterest-p-icon` | [pinterest-p](https://github.com/Dellos7/local-icons/blob/master/icons/pinterest-p/pinterest-p.css) | <img src="icons/pinterest-p/pinterest-p.png" width="30"> | PNG |
| pinterest-square | `pinterest-square-icon` | [pinterest-square](https://github.com/Dellos7/local-icons/blob/master/icons/pinterest-square/pinterest-square.css) | <img src="icons/pinterest-square/pinterest-square.png" width="30"> | PNG |
| pinterest | `pinterest-icon` | [pinterest](https://github.com/Dellos7/local-icons/blob/master/icons/pinterest/pinterest.css) | <img src="icons/pinterest/pinterest.png" width="30"> | PNG |
| plane | `plane-icon` | [plane](https://github.com/Dellos7/local-icons/blob/master/icons/plane/plane.css) | <img src="icons/plane/plane.png" width="30"> | PNG |
| play-circle-o | `play-circle-o-icon` | [play-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/play-circle-o/play-circle-o.css) | <img src="icons/play-circle-o/play-circle-o.png" width="30"> | PNG |
| play-circle | `play-circle-icon` | [play-circle](https://github.com/Dellos7/local-icons/blob/master/icons/play-circle/play-circle.css) | <img src="icons/play-circle/play-circle.png" width="30"> | PNG |
| play | `play-icon` | [play](https://github.com/Dellos7/local-icons/blob/master/icons/play/play.css) | <img src="icons/play/play.png" width="30"> | PNG |
| plug | `plug-icon` | [plug](https://github.com/Dellos7/local-icons/blob/master/icons/plug/plug.css) | <img src="icons/plug/plug.png" width="30"> | PNG |
| plus-circle | `plus-circle-icon` | [plus-circle](https://github.com/Dellos7/local-icons/blob/master/icons/plus-circle/plus-circle.css) | <img src="icons/plus-circle/plus-circle.png" width="30"> | PNG |
| plus-square-o | `plus-square-o-icon` | [plus-square-o](https://github.com/Dellos7/local-icons/blob/master/icons/plus-square-o/plus-square-o.css) | <img src="icons/plus-square-o/plus-square-o.png" width="30"> | PNG |
| plus-square | `plus-square-icon` | [plus-square](https://github.com/Dellos7/local-icons/blob/master/icons/plus-square/plus-square.css) | <img src="icons/plus-square/plus-square.png" width="30"> | PNG |
| plus | `plus-icon` | [plus](https://github.com/Dellos7/local-icons/blob/master/icons/plus/plus.css) | <img src="icons/plus/plus.png" width="30"> | PNG |
| podcast | `podcast-icon` | [podcast](https://github.com/Dellos7/local-icons/blob/master/icons/podcast/podcast.css) | <img src="icons/podcast/podcast.png" width="30"> | PNG |
| power-off | `power-off-icon` | [power-off](https://github.com/Dellos7/local-icons/blob/master/icons/power-off/power-off.css) | <img src="icons/power-off/power-off.png" width="30"> | PNG |
| print | `print-icon` | [print](https://github.com/Dellos7/local-icons/blob/master/icons/print/print.css) | <img src="icons/print/print.png" width="30"> | PNG |
| product-hunt | `product-hunt-icon` | [product-hunt](https://github.com/Dellos7/local-icons/blob/master/icons/product-hunt/product-hunt.css) | <img src="icons/product-hunt/product-hunt.png" width="30"> | PNG |
| puzzle-piece | `puzzle-piece-icon` | [puzzle-piece](https://github.com/Dellos7/local-icons/blob/master/icons/puzzle-piece/puzzle-piece.css) | <img src="icons/puzzle-piece/puzzle-piece.png" width="30"> | PNG |
| qq | `qq-icon` | [qq](https://github.com/Dellos7/local-icons/blob/master/icons/qq/qq.css) | <img src="icons/qq/qq.png" width="30"> | PNG |
| qrcode | `qrcode-icon` | [qrcode](https://github.com/Dellos7/local-icons/blob/master/icons/qrcode/qrcode.css) | <img src="icons/qrcode/qrcode.png" width="30"> | PNG |
| question-circle-o | `question-circle-o-icon` | [question-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/question-circle-o/question-circle-o.css) | <img src="icons/question-circle-o/question-circle-o.png" width="30"> | PNG |
| question-circle | `question-circle-icon` | [question-circle](https://github.com/Dellos7/local-icons/blob/master/icons/question-circle/question-circle.css) | <img src="icons/question-circle/question-circle.png" width="30"> | PNG |
| question | `question-icon` | [question](https://github.com/Dellos7/local-icons/blob/master/icons/question/question.css) | <img src="icons/question/question.png" width="30"> | PNG |
| quora | `quora-icon` | [quora](https://github.com/Dellos7/local-icons/blob/master/icons/quora/quora.css) | <img src="icons/quora/quora.png" width="30"> | PNG |
| quote-left | `quote-left-icon` | [quote-left](https://github.com/Dellos7/local-icons/blob/master/icons/quote-left/quote-left.css) | <img src="icons/quote-left/quote-left.png" width="30"> | PNG |
| quote-right | `quote-right-icon` | [quote-right](https://github.com/Dellos7/local-icons/blob/master/icons/quote-right/quote-right.css) | <img src="icons/quote-right/quote-right.png" width="30"> | PNG |
| ra | `ra-icon` | [ra](https://github.com/Dellos7/local-icons/blob/master/icons/ra/ra.css) | <img src="icons/ra/ra.png" width="30"> | PNG |
| random | `random-icon` | [random](https://github.com/Dellos7/local-icons/blob/master/icons/random/random.css) | <img src="icons/random/random.png" width="30"> | PNG |
| ravelry | `ravelry-icon` | [ravelry](https://github.com/Dellos7/local-icons/blob/master/icons/ravelry/ravelry.css) | <img src="icons/ravelry/ravelry.png" width="30"> | PNG |
| rebel | `rebel-icon` | [rebel](https://github.com/Dellos7/local-icons/blob/master/icons/rebel/rebel.css) | <img src="icons/rebel/rebel.png" width="30"> | PNG |
| recycle | `recycle-icon` | [recycle](https://github.com/Dellos7/local-icons/blob/master/icons/recycle/recycle.css) | <img src="icons/recycle/recycle.png" width="30"> | PNG |
| reddit-alien | `reddit-alien-icon` | [reddit-alien](https://github.com/Dellos7/local-icons/blob/master/icons/reddit-alien/reddit-alien.css) | <img src="icons/reddit-alien/reddit-alien.png" width="30"> | PNG |
| reddit-square | `reddit-square-icon` | [reddit-square](https://github.com/Dellos7/local-icons/blob/master/icons/reddit-square/reddit-square.css) | <img src="icons/reddit-square/reddit-square.png" width="30"> | PNG |
| reddit | `reddit-icon` | [reddit](https://github.com/Dellos7/local-icons/blob/master/icons/reddit/reddit.css) | <img src="icons/reddit/reddit.png" width="30"> | PNG |
| refresh | `refresh-icon` | [refresh](https://github.com/Dellos7/local-icons/blob/master/icons/refresh/refresh.css) | <img src="icons/refresh/refresh.png" width="30"> | PNG |
| registered | `registered-icon` | [registered](https://github.com/Dellos7/local-icons/blob/master/icons/registered/registered.css) | <img src="icons/registered/registered.png" width="30"> | PNG |
| remove | `remove-icon` | [remove](https://github.com/Dellos7/local-icons/blob/master/icons/remove/remove.css) | <img src="icons/remove/remove.png" width="30"> | PNG |
| renren | `renren-icon` | [renren](https://github.com/Dellos7/local-icons/blob/master/icons/renren/renren.css) | <img src="icons/renren/renren.png" width="30"> | PNG |
| reorder | `reorder-icon` | [reorder](https://github.com/Dellos7/local-icons/blob/master/icons/reorder/reorder.css) | <img src="icons/reorder/reorder.png" width="30"> | PNG |
| repeat | `repeat-icon` | [repeat](https://github.com/Dellos7/local-icons/blob/master/icons/repeat/repeat.css) | <img src="icons/repeat/repeat.png" width="30"> | PNG |
| reply-all | `reply-all-icon` | [reply-all](https://github.com/Dellos7/local-icons/blob/master/icons/reply-all/reply-all.css) | <img src="icons/reply-all/reply-all.png" width="30"> | PNG |
| reply | `reply-icon` | [reply](https://github.com/Dellos7/local-icons/blob/master/icons/reply/reply.css) | <img src="icons/reply/reply.png" width="30"> | PNG |
| resistance | `resistance-icon` | [resistance](https://github.com/Dellos7/local-icons/blob/master/icons/resistance/resistance.css) | <img src="icons/resistance/resistance.png" width="30"> | PNG |
| retweet | `retweet-icon` | [retweet](https://github.com/Dellos7/local-icons/blob/master/icons/retweet/retweet.css) | <img src="icons/retweet/retweet.png" width="30"> | PNG |
| rmb | `rmb-icon` | [rmb](https://github.com/Dellos7/local-icons/blob/master/icons/rmb/rmb.css) | <img src="icons/rmb/rmb.png" width="30"> | PNG |
| road | `road-icon` | [road](https://github.com/Dellos7/local-icons/blob/master/icons/road/road.css) | <img src="icons/road/road.png" width="30"> | PNG |
| rocket | `rocket-icon` | [rocket](https://github.com/Dellos7/local-icons/blob/master/icons/rocket/rocket.css) | <img src="icons/rocket/rocket.png" width="30"> | PNG |
| rotate-left | `rotate-left-icon` | [rotate-left](https://github.com/Dellos7/local-icons/blob/master/icons/rotate-left/rotate-left.css) | <img src="icons/rotate-left/rotate-left.png" width="30"> | PNG |
| rotate-right | `rotate-right-icon` | [rotate-right](https://github.com/Dellos7/local-icons/blob/master/icons/rotate-right/rotate-right.css) | <img src="icons/rotate-right/rotate-right.png" width="30"> | PNG |
| rouble | `rouble-icon` | [rouble](https://github.com/Dellos7/local-icons/blob/master/icons/rouble/rouble.css) | <img src="icons/rouble/rouble.png" width="30"> | PNG |
| rss-square | `rss-square-icon` | [rss-square](https://github.com/Dellos7/local-icons/blob/master/icons/rss-square/rss-square.css) | <img src="icons/rss-square/rss-square.png" width="30"> | PNG |
| rss | `rss-icon` | [rss](https://github.com/Dellos7/local-icons/blob/master/icons/rss/rss.css) | <img src="icons/rss/rss.png" width="30"> | PNG |
| rub | `rub-icon` | [rub](https://github.com/Dellos7/local-icons/blob/master/icons/rub/rub.css) | <img src="icons/rub/rub.png" width="30"> | PNG |
| ruble | `ruble-icon` | [ruble](https://github.com/Dellos7/local-icons/blob/master/icons/ruble/ruble.css) | <img src="icons/ruble/ruble.png" width="30"> | PNG |
| rupee | `rupee-icon` | [rupee](https://github.com/Dellos7/local-icons/blob/master/icons/rupee/rupee.css) | <img src="icons/rupee/rupee.png" width="30"> | PNG |
| s15 | `s15-icon` | [s15](https://github.com/Dellos7/local-icons/blob/master/icons/s15/s15.css) | <img src="icons/s15/s15.png" width="30"> | PNG |
| safari | `safari-icon` | [safari](https://github.com/Dellos7/local-icons/blob/master/icons/safari/safari.css) | <img src="icons/safari/safari.png" width="30"> | PNG |
| save | `save-icon` | [save](https://github.com/Dellos7/local-icons/blob/master/icons/save/save.css) | <img src="icons/save/save.png" width="30"> | PNG |
| scissors | `scissors-icon` | [scissors](https://github.com/Dellos7/local-icons/blob/master/icons/scissors/scissors.css) | <img src="icons/scissors/scissors.png" width="30"> | PNG |
| scribd | `scribd-icon` | [scribd](https://github.com/Dellos7/local-icons/blob/master/icons/scribd/scribd.css) | <img src="icons/scribd/scribd.png" width="30"> | PNG |
| search-minus | `search-minus-icon` | [search-minus](https://github.com/Dellos7/local-icons/blob/master/icons/search-minus/search-minus.css) | <img src="icons/search-minus/search-minus.png" width="30"> | PNG |
| search-plus | `search-plus-icon` | [search-plus](https://github.com/Dellos7/local-icons/blob/master/icons/search-plus/search-plus.css) | <img src="icons/search-plus/search-plus.png" width="30"> | PNG |
| search | `search-icon` | [search](https://github.com/Dellos7/local-icons/blob/master/icons/search/search.css) | <img src="icons/search/search.png" width="30"> | PNG |
| sellsy | `sellsy-icon` | [sellsy](https://github.com/Dellos7/local-icons/blob/master/icons/sellsy/sellsy.css) | <img src="icons/sellsy/sellsy.png" width="30"> | PNG |
| send-o | `send-o-icon` | [send-o](https://github.com/Dellos7/local-icons/blob/master/icons/send-o/send-o.css) | <img src="icons/send-o/send-o.png" width="30"> | PNG |
| send | `send-icon` | [send](https://github.com/Dellos7/local-icons/blob/master/icons/send/send.css) | <img src="icons/send/send.png" width="30"> | PNG |
| server | `server-icon` | [server](https://github.com/Dellos7/local-icons/blob/master/icons/server/server.css) | <img src="icons/server/server.png" width="30"> | PNG |
| share-alt-square | `share-alt-square-icon` | [share-alt-square](https://github.com/Dellos7/local-icons/blob/master/icons/share-alt-square/share-alt-square.css) | <img src="icons/share-alt-square/share-alt-square.png" width="30"> | PNG |
| share-alt | `share-alt-icon` | [share-alt](https://github.com/Dellos7/local-icons/blob/master/icons/share-alt/share-alt.css) | <img src="icons/share-alt/share-alt.png" width="30"> | PNG |
| share-square-o | `share-square-o-icon` | [share-square-o](https://github.com/Dellos7/local-icons/blob/master/icons/share-square-o/share-square-o.css) | <img src="icons/share-square-o/share-square-o.png" width="30"> | PNG |
| share-square | `share-square-icon` | [share-square](https://github.com/Dellos7/local-icons/blob/master/icons/share-square/share-square.css) | <img src="icons/share-square/share-square.png" width="30"> | PNG |
| share | `share-icon` | [share](https://github.com/Dellos7/local-icons/blob/master/icons/share/share.css) | <img src="icons/share/share.png" width="30"> | PNG |
| shekel | `shekel-icon` | [shekel](https://github.com/Dellos7/local-icons/blob/master/icons/shekel/shekel.css) | <img src="icons/shekel/shekel.png" width="30"> | PNG |
| sheqel | `sheqel-icon` | [sheqel](https://github.com/Dellos7/local-icons/blob/master/icons/sheqel/sheqel.css) | <img src="icons/sheqel/sheqel.png" width="30"> | PNG |
| shield | `shield-icon` | [shield](https://github.com/Dellos7/local-icons/blob/master/icons/shield/shield.css) | <img src="icons/shield/shield.png" width="30"> | PNG |
| ship | `ship-icon` | [ship](https://github.com/Dellos7/local-icons/blob/master/icons/ship/ship.css) | <img src="icons/ship/ship.png" width="30"> | PNG |
| shirtsinbulk | `shirtsinbulk-icon` | [shirtsinbulk](https://github.com/Dellos7/local-icons/blob/master/icons/shirtsinbulk/shirtsinbulk.css) | <img src="icons/shirtsinbulk/shirtsinbulk.png" width="30"> | PNG |
| shopping-bag | `shopping-bag-icon` | [shopping-bag](https://github.com/Dellos7/local-icons/blob/master/icons/shopping-bag/shopping-bag.css) | <img src="icons/shopping-bag/shopping-bag.png" width="30"> | PNG |
| shopping-basket | `shopping-basket-icon` | [shopping-basket](https://github.com/Dellos7/local-icons/blob/master/icons/shopping-basket/shopping-basket.css) | <img src="icons/shopping-basket/shopping-basket.png" width="30"> | PNG |
| shopping-cart | `shopping-cart-icon` | [shopping-cart](https://github.com/Dellos7/local-icons/blob/master/icons/shopping-cart/shopping-cart.css) | <img src="icons/shopping-cart/shopping-cart.png" width="30"> | PNG |
| shower | `shower-icon` | [shower](https://github.com/Dellos7/local-icons/blob/master/icons/shower/shower.css) | <img src="icons/shower/shower.png" width="30"> | PNG |
| sign-in | `sign-in-icon` | [sign-in](https://github.com/Dellos7/local-icons/blob/master/icons/sign-in/sign-in.css) | <img src="icons/sign-in/sign-in.png" width="30"> | PNG |
| sign-language | `sign-language-icon` | [sign-language](https://github.com/Dellos7/local-icons/blob/master/icons/sign-language/sign-language.css) | <img src="icons/sign-language/sign-language.png" width="30"> | PNG |
| sign-out | `sign-out-icon` | [sign-out](https://github.com/Dellos7/local-icons/blob/master/icons/sign-out/sign-out.css) | <img src="icons/sign-out/sign-out.png" width="30"> | PNG |
| signal | `signal-icon` | [signal](https://github.com/Dellos7/local-icons/blob/master/icons/signal/signal.css) | <img src="icons/signal/signal.png" width="30"> | PNG |
| signing | `signing-icon` | [signing](https://github.com/Dellos7/local-icons/blob/master/icons/signing/signing.css) | <img src="icons/signing/signing.png" width="30"> | PNG |
| simplybuilt | `simplybuilt-icon` | [simplybuilt](https://github.com/Dellos7/local-icons/blob/master/icons/simplybuilt/simplybuilt.css) | <img src="icons/simplybuilt/simplybuilt.png" width="30"> | PNG |
| sitemap | `sitemap-icon` | [sitemap](https://github.com/Dellos7/local-icons/blob/master/icons/sitemap/sitemap.css) | <img src="icons/sitemap/sitemap.png" width="30"> | PNG |
| skyatlas | `skyatlas-icon` | [skyatlas](https://github.com/Dellos7/local-icons/blob/master/icons/skyatlas/skyatlas.css) | <img src="icons/skyatlas/skyatlas.png" width="30"> | PNG |
| skype | `skype-icon` | [skype](https://github.com/Dellos7/local-icons/blob/master/icons/skype/skype.css) | <img src="icons/skype/skype.png" width="30"> | PNG |
| slack | `slack-icon` | [slack](https://github.com/Dellos7/local-icons/blob/master/icons/slack/slack.css) | <img src="icons/slack/slack.png" width="30"> | PNG |
| sliders | `sliders-icon` | [sliders](https://github.com/Dellos7/local-icons/blob/master/icons/sliders/sliders.css) | <img src="icons/sliders/sliders.png" width="30"> | PNG |
| slideshare | `slideshare-icon` | [slideshare](https://github.com/Dellos7/local-icons/blob/master/icons/slideshare/slideshare.css) | <img src="icons/slideshare/slideshare.png" width="30"> | PNG |
| smile-o | `smile-o-icon` | [smile-o](https://github.com/Dellos7/local-icons/blob/master/icons/smile-o/smile-o.css) | <img src="icons/smile-o/smile-o.png" width="30"> | PNG |
| snapchat-ghost | `snapchat-ghost-icon` | [snapchat-ghost](https://github.com/Dellos7/local-icons/blob/master/icons/snapchat-ghost/snapchat-ghost.css) | <img src="icons/snapchat-ghost/snapchat-ghost.png" width="30"> | PNG |
| snapchat-square | `snapchat-square-icon` | [snapchat-square](https://github.com/Dellos7/local-icons/blob/master/icons/snapchat-square/snapchat-square.css) | <img src="icons/snapchat-square/snapchat-square.png" width="30"> | PNG |
| snapchat | `snapchat-icon` | [snapchat](https://github.com/Dellos7/local-icons/blob/master/icons/snapchat/snapchat.css) | <img src="icons/snapchat/snapchat.png" width="30"> | PNG |
| snowflake-o | `snowflake-o-icon` | [snowflake-o](https://github.com/Dellos7/local-icons/blob/master/icons/snowflake-o/snowflake-o.css) | <img src="icons/snowflake-o/snowflake-o.png" width="30"> | PNG |
| soccer-ball-o | `soccer-ball-o-icon` | [soccer-ball-o](https://github.com/Dellos7/local-icons/blob/master/icons/soccer-ball-o/soccer-ball-o.css) | <img src="icons/soccer-ball-o/soccer-ball-o.png" width="30"> | PNG |
| sort-alpha-asc | `sort-alpha-asc-icon` | [sort-alpha-asc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-alpha-asc/sort-alpha-asc.css) | <img src="icons/sort-alpha-asc/sort-alpha-asc.png" width="30"> | PNG |
| sort-alpha-desc | `sort-alpha-desc-icon` | [sort-alpha-desc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-alpha-desc/sort-alpha-desc.css) | <img src="icons/sort-alpha-desc/sort-alpha-desc.png" width="30"> | PNG |
| sort-amount-asc | `sort-amount-asc-icon` | [sort-amount-asc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-amount-asc/sort-amount-asc.css) | <img src="icons/sort-amount-asc/sort-amount-asc.png" width="30"> | PNG |
| sort-amount-desc | `sort-amount-desc-icon` | [sort-amount-desc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-amount-desc/sort-amount-desc.css) | <img src="icons/sort-amount-desc/sort-amount-desc.png" width="30"> | PNG |
| sort-asc | `sort-asc-icon` | [sort-asc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-asc/sort-asc.css) | <img src="icons/sort-asc/sort-asc.png" width="30"> | PNG |
| sort-desc | `sort-desc-icon` | [sort-desc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-desc/sort-desc.css) | <img src="icons/sort-desc/sort-desc.png" width="30"> | PNG |
| sort-down | `sort-down-icon` | [sort-down](https://github.com/Dellos7/local-icons/blob/master/icons/sort-down/sort-down.css) | <img src="icons/sort-down/sort-down.png" width="30"> | PNG |
| sort-numeric-asc | `sort-numeric-asc-icon` | [sort-numeric-asc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-numeric-asc/sort-numeric-asc.css) | <img src="icons/sort-numeric-asc/sort-numeric-asc.png" width="30"> | PNG |
| sort-numeric-desc | `sort-numeric-desc-icon` | [sort-numeric-desc](https://github.com/Dellos7/local-icons/blob/master/icons/sort-numeric-desc/sort-numeric-desc.css) | <img src="icons/sort-numeric-desc/sort-numeric-desc.png" width="30"> | PNG |
| sort-up | `sort-up-icon` | [sort-up](https://github.com/Dellos7/local-icons/blob/master/icons/sort-up/sort-up.css) | <img src="icons/sort-up/sort-up.png" width="30"> | PNG |
| sort | `sort-icon` | [sort](https://github.com/Dellos7/local-icons/blob/master/icons/sort/sort.css) | <img src="icons/sort/sort.png" width="30"> | PNG |
| soundcloud | `soundcloud-icon` | [soundcloud](https://github.com/Dellos7/local-icons/blob/master/icons/soundcloud/soundcloud.css) | <img src="icons/soundcloud/soundcloud.png" width="30"> | PNG |
| space-shuttle | `space-shuttle-icon` | [space-shuttle](https://github.com/Dellos7/local-icons/blob/master/icons/space-shuttle/space-shuttle.css) | <img src="icons/space-shuttle/space-shuttle.png" width="30"> | PNG |
| spinner | `spinner-icon` | [spinner](https://github.com/Dellos7/local-icons/blob/master/icons/spinner/spinner.css) | <img src="icons/spinner/spinner.png" width="30"> | PNG |
| spoon | `spoon-icon` | [spoon](https://github.com/Dellos7/local-icons/blob/master/icons/spoon/spoon.css) | <img src="icons/spoon/spoon.png" width="30"> | PNG |
| spotify | `spotify-icon` | [spotify](https://github.com/Dellos7/local-icons/blob/master/icons/spotify/spotify.css) | <img src="icons/spotify/spotify.png" width="30"> | PNG |
| square-o | `square-o-icon` | [square-o](https://github.com/Dellos7/local-icons/blob/master/icons/square-o/square-o.css) | <img src="icons/square-o/square-o.png" width="30"> | PNG |
| square | `square-icon` | [square](https://github.com/Dellos7/local-icons/blob/master/icons/square/square.css) | <img src="icons/square/square.png" width="30"> | PNG |
| stack-exchange | `stack-exchange-icon` | [stack-exchange](https://github.com/Dellos7/local-icons/blob/master/icons/stack-exchange/stack-exchange.css) | <img src="icons/stack-exchange/stack-exchange.png" width="30"> | PNG |
| stack-overflow | `stack-overflow-icon` | [stack-overflow](https://github.com/Dellos7/local-icons/blob/master/icons/stack-overflow/stack-overflow.css) | <img src="icons/stack-overflow/stack-overflow.png" width="30"> | PNG |
| star-half-empty | `star-half-empty-icon` | [star-half-empty](https://github.com/Dellos7/local-icons/blob/master/icons/star-half-empty/star-half-empty.css) | <img src="icons/star-half-empty/star-half-empty.png" width="30"> | PNG |
| star-half-full | `star-half-full-icon` | [star-half-full](https://github.com/Dellos7/local-icons/blob/master/icons/star-half-full/star-half-full.css) | <img src="icons/star-half-full/star-half-full.png" width="30"> | PNG |
| star-half-o | `star-half-o-icon` | [star-half-o](https://github.com/Dellos7/local-icons/blob/master/icons/star-half-o/star-half-o.css) | <img src="icons/star-half-o/star-half-o.png" width="30"> | PNG |
| star-half | `star-half-icon` | [star-half](https://github.com/Dellos7/local-icons/blob/master/icons/star-half/star-half.css) | <img src="icons/star-half/star-half.png" width="30"> | PNG |
| star-o | `star-o-icon` | [star-o](https://github.com/Dellos7/local-icons/blob/master/icons/star-o/star-o.css) | <img src="icons/star-o/star-o.png" width="30"> | PNG |
| star | `star-icon` | [star](https://github.com/Dellos7/local-icons/blob/master/icons/star/star.css) | <img src="icons/star/star.png" width="30"> | PNG |
| steam-square | `steam-square-icon` | [steam-square](https://github.com/Dellos7/local-icons/blob/master/icons/steam-square/steam-square.css) | <img src="icons/steam-square/steam-square.png" width="30"> | PNG |
| steam | `steam-icon` | [steam](https://github.com/Dellos7/local-icons/blob/master/icons/steam/steam.css) | <img src="icons/steam/steam.png" width="30"> | PNG |
| step-backward | `step-backward-icon` | [step-backward](https://github.com/Dellos7/local-icons/blob/master/icons/step-backward/step-backward.css) | <img src="icons/step-backward/step-backward.png" width="30"> | PNG |
| step-forward | `step-forward-icon` | [step-forward](https://github.com/Dellos7/local-icons/blob/master/icons/step-forward/step-forward.css) | <img src="icons/step-forward/step-forward.png" width="30"> | PNG |
| stethoscope | `stethoscope-icon` | [stethoscope](https://github.com/Dellos7/local-icons/blob/master/icons/stethoscope/stethoscope.css) | <img src="icons/stethoscope/stethoscope.png" width="30"> | PNG |
| sticky-note-o | `sticky-note-o-icon` | [sticky-note-o](https://github.com/Dellos7/local-icons/blob/master/icons/sticky-note-o/sticky-note-o.css) | <img src="icons/sticky-note-o/sticky-note-o.png" width="30"> | PNG |
| sticky-note | `sticky-note-icon` | [sticky-note](https://github.com/Dellos7/local-icons/blob/master/icons/sticky-note/sticky-note.css) | <img src="icons/sticky-note/sticky-note.png" width="30"> | PNG |
| stop-circle-o | `stop-circle-o-icon` | [stop-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/stop-circle-o/stop-circle-o.css) | <img src="icons/stop-circle-o/stop-circle-o.png" width="30"> | PNG |
| stop-circle | `stop-circle-icon` | [stop-circle](https://github.com/Dellos7/local-icons/blob/master/icons/stop-circle/stop-circle.css) | <img src="icons/stop-circle/stop-circle.png" width="30"> | PNG |
| stop | `stop-icon` | [stop](https://github.com/Dellos7/local-icons/blob/master/icons/stop/stop.css) | <img src="icons/stop/stop.png" width="30"> | PNG |
| street-view | `street-view-icon` | [street-view](https://github.com/Dellos7/local-icons/blob/master/icons/street-view/street-view.css) | <img src="icons/street-view/street-view.png" width="30"> | PNG |
| strikethrough | `strikethrough-icon` | [strikethrough](https://github.com/Dellos7/local-icons/blob/master/icons/strikethrough/strikethrough.css) | <img src="icons/strikethrough/strikethrough.png" width="30"> | PNG |
| stumbleupon-circle | `stumbleupon-circle-icon` | [stumbleupon-circle](https://github.com/Dellos7/local-icons/blob/master/icons/stumbleupon-circle/stumbleupon-circle.css) | <img src="icons/stumbleupon-circle/stumbleupon-circle.png" width="30"> | PNG |
| stumbleupon | `stumbleupon-icon` | [stumbleupon](https://github.com/Dellos7/local-icons/blob/master/icons/stumbleupon/stumbleupon.css) | <img src="icons/stumbleupon/stumbleupon.png" width="30"> | PNG |
| subscript | `subscript-icon` | [subscript](https://github.com/Dellos7/local-icons/blob/master/icons/subscript/subscript.css) | <img src="icons/subscript/subscript.png" width="30"> | PNG |
| subway | `subway-icon` | [subway](https://github.com/Dellos7/local-icons/blob/master/icons/subway/subway.css) | <img src="icons/subway/subway.png" width="30"> | PNG |
| suitcase | `suitcase-icon` | [suitcase](https://github.com/Dellos7/local-icons/blob/master/icons/suitcase/suitcase.css) | <img src="icons/suitcase/suitcase.png" width="30"> | PNG |
| sun-o | `sun-o-icon` | [sun-o](https://github.com/Dellos7/local-icons/blob/master/icons/sun-o/sun-o.css) | <img src="icons/sun-o/sun-o.png" width="30"> | PNG |
| superpowers | `superpowers-icon` | [superpowers](https://github.com/Dellos7/local-icons/blob/master/icons/superpowers/superpowers.css) | <img src="icons/superpowers/superpowers.png" width="30"> | PNG |
| superscript | `superscript-icon` | [superscript](https://github.com/Dellos7/local-icons/blob/master/icons/superscript/superscript.css) | <img src="icons/superscript/superscript.png" width="30"> | PNG |
| support | `support-icon` | [support](https://github.com/Dellos7/local-icons/blob/master/icons/support/support.css) | <img src="icons/support/support.png" width="30"> | PNG |
| table | `table-icon` | [table](https://github.com/Dellos7/local-icons/blob/master/icons/table/table.css) | <img src="icons/table/table.png" width="30"> | PNG |
| tablet | `tablet-icon` | [tablet](https://github.com/Dellos7/local-icons/blob/master/icons/tablet/tablet.css) | <img src="icons/tablet/tablet.png" width="30"> | PNG |
| tachometer | `tachometer-icon` | [tachometer](https://github.com/Dellos7/local-icons/blob/master/icons/tachometer/tachometer.css) | <img src="icons/tachometer/tachometer.png" width="30"> | PNG |
| tag | `tag-icon` | [tag](https://github.com/Dellos7/local-icons/blob/master/icons/tag/tag.css) | <img src="icons/tag/tag.png" width="30"> | PNG |
| tags | `tags-icon` | [tags](https://github.com/Dellos7/local-icons/blob/master/icons/tags/tags.css) | <img src="icons/tags/tags.png" width="30"> | PNG |
| tasks | `tasks-icon` | [tasks](https://github.com/Dellos7/local-icons/blob/master/icons/tasks/tasks.css) | <img src="icons/tasks/tasks.png" width="30"> | PNG |
| taxi | `taxi-icon` | [taxi](https://github.com/Dellos7/local-icons/blob/master/icons/taxi/taxi.css) | <img src="icons/taxi/taxi.png" width="30"> | PNG |
| telegram | `telegram-icon` | [telegram](https://github.com/Dellos7/local-icons/blob/master/icons/telegram/telegram.css) | <img src="icons/telegram/telegram.png" width="30"> | PNG |
| television | `television-icon` | [television](https://github.com/Dellos7/local-icons/blob/master/icons/television/television.css) | <img src="icons/television/television.png" width="30"> | PNG |
| tencent-weibo | `tencent-weibo-icon` | [tencent-weibo](https://github.com/Dellos7/local-icons/blob/master/icons/tencent-weibo/tencent-weibo.css) | <img src="icons/tencent-weibo/tencent-weibo.png" width="30"> | PNG |
| terminal | `terminal-icon` | [terminal](https://github.com/Dellos7/local-icons/blob/master/icons/terminal/terminal.css) | <img src="icons/terminal/terminal.png" width="30"> | PNG |
| text-height | `text-height-icon` | [text-height](https://github.com/Dellos7/local-icons/blob/master/icons/text-height/text-height.css) | <img src="icons/text-height/text-height.png" width="30"> | PNG |
| text-width | `text-width-icon` | [text-width](https://github.com/Dellos7/local-icons/blob/master/icons/text-width/text-width.css) | <img src="icons/text-width/text-width.png" width="30"> | PNG |
| th-large | `th-large-icon` | [th-large](https://github.com/Dellos7/local-icons/blob/master/icons/th-large/th-large.css) | <img src="icons/th-large/th-large.png" width="30"> | PNG |
| th-list | `th-list-icon` | [th-list](https://github.com/Dellos7/local-icons/blob/master/icons/th-list/th-list.css) | <img src="icons/th-list/th-list.png" width="30"> | PNG |
| th | `th-icon` | [th](https://github.com/Dellos7/local-icons/blob/master/icons/th/th.css) | <img src="icons/th/th.png" width="30"> | PNG |
| themeisle | `themeisle-icon` | [themeisle](https://github.com/Dellos7/local-icons/blob/master/icons/themeisle/themeisle.css) | <img src="icons/themeisle/themeisle.png" width="30"> | PNG |
| thermometer-0 | `thermometer-0-icon` | [thermometer-0](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-0/thermometer-0.css) | <img src="icons/thermometer-0/thermometer-0.png" width="30"> | PNG |
| thermometer-1 | `thermometer-1-icon` | [thermometer-1](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-1/thermometer-1.css) | <img src="icons/thermometer-1/thermometer-1.png" width="30"> | PNG |
| thermometer-2 | `thermometer-2-icon` | [thermometer-2](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-2/thermometer-2.css) | <img src="icons/thermometer-2/thermometer-2.png" width="30"> | PNG |
| thermometer-3 | `thermometer-3-icon` | [thermometer-3](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-3/thermometer-3.css) | <img src="icons/thermometer-3/thermometer-3.png" width="30"> | PNG |
| thermometer-4 | `thermometer-4-icon` | [thermometer-4](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-4/thermometer-4.css) | <img src="icons/thermometer-4/thermometer-4.png" width="30"> | PNG |
| thermometer-empty | `thermometer-empty-icon` | [thermometer-empty](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-empty/thermometer-empty.css) | <img src="icons/thermometer-empty/thermometer-empty.png" width="30"> | PNG |
| thermometer-full | `thermometer-full-icon` | [thermometer-full](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-full/thermometer-full.css) | <img src="icons/thermometer-full/thermometer-full.png" width="30"> | PNG |
| thermometer-half | `thermometer-half-icon` | [thermometer-half](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-half/thermometer-half.css) | <img src="icons/thermometer-half/thermometer-half.png" width="30"> | PNG |
| thermometer-quarter | `thermometer-quarter-icon` | [thermometer-quarter](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-quarter/thermometer-quarter.css) | <img src="icons/thermometer-quarter/thermometer-quarter.png" width="30"> | PNG |
| thermometer-three-quarters | `thermometer-three-quarters-icon` | [thermometer-three-quarters](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer-three-quarters/thermometer-three-quarters.css) | <img src="icons/thermometer-three-quarters/thermometer-three-quarters.png" width="30"> | PNG |
| thermometer | `thermometer-icon` | [thermometer](https://github.com/Dellos7/local-icons/blob/master/icons/thermometer/thermometer.css) | <img src="icons/thermometer/thermometer.png" width="30"> | PNG |
| thumb-tack | `thumb-tack-icon` | [thumb-tack](https://github.com/Dellos7/local-icons/blob/master/icons/thumb-tack/thumb-tack.css) | <img src="icons/thumb-tack/thumb-tack.png" width="30"> | PNG |
| thumbs-down | `thumbs-down-icon` | [thumbs-down](https://github.com/Dellos7/local-icons/blob/master/icons/thumbs-down/thumbs-down.css) | <img src="icons/thumbs-down/thumbs-down.png" width="30"> | PNG |
| thumbs-o-down | `thumbs-o-down-icon` | [thumbs-o-down](https://github.com/Dellos7/local-icons/blob/master/icons/thumbs-o-down/thumbs-o-down.css) | <img src="icons/thumbs-o-down/thumbs-o-down.png" width="30"> | PNG |
| thumbs-o-up | `thumbs-o-up-icon` | [thumbs-o-up](https://github.com/Dellos7/local-icons/blob/master/icons/thumbs-o-up/thumbs-o-up.css) | <img src="icons/thumbs-o-up/thumbs-o-up.png" width="30"> | PNG |
| thumbs-up | `thumbs-up-icon` | [thumbs-up](https://github.com/Dellos7/local-icons/blob/master/icons/thumbs-up/thumbs-up.css) | <img src="icons/thumbs-up/thumbs-up.png" width="30"> | PNG |
| ticket | `ticket-icon` | [ticket](https://github.com/Dellos7/local-icons/blob/master/icons/ticket/ticket.css) | <img src="icons/ticket/ticket.png" width="30"> | PNG |
| times-circle-o | `times-circle-o-icon` | [times-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/times-circle-o/times-circle-o.css) | <img src="icons/times-circle-o/times-circle-o.png" width="30"> | PNG |
| times-circle | `times-circle-icon` | [times-circle](https://github.com/Dellos7/local-icons/blob/master/icons/times-circle/times-circle.css) | <img src="icons/times-circle/times-circle.png" width="30"> | PNG |
| times-rectangle-o | `times-rectangle-o-icon` | [times-rectangle-o](https://github.com/Dellos7/local-icons/blob/master/icons/times-rectangle-o/times-rectangle-o.css) | <img src="icons/times-rectangle-o/times-rectangle-o.png" width="30"> | PNG |
| times-rectangle | `times-rectangle-icon` | [times-rectangle](https://github.com/Dellos7/local-icons/blob/master/icons/times-rectangle/times-rectangle.css) | <img src="icons/times-rectangle/times-rectangle.png" width="30"> | PNG |
| times | `times-icon` | [times](https://github.com/Dellos7/local-icons/blob/master/icons/times/times.css) | <img src="icons/times/times.png" width="30"> | PNG |
| tint | `tint-icon` | [tint](https://github.com/Dellos7/local-icons/blob/master/icons/tint/tint.css) | <img src="icons/tint/tint.png" width="30"> | PNG |
| toggle-down | `toggle-down-icon` | [toggle-down](https://github.com/Dellos7/local-icons/blob/master/icons/toggle-down/toggle-down.css) | <img src="icons/toggle-down/toggle-down.png" width="30"> | PNG |
| toggle-left | `toggle-left-icon` | [toggle-left](https://github.com/Dellos7/local-icons/blob/master/icons/toggle-left/toggle-left.css) | <img src="icons/toggle-left/toggle-left.png" width="30"> | PNG |
| toggle-off | `toggle-off-icon` | [toggle-off](https://github.com/Dellos7/local-icons/blob/master/icons/toggle-off/toggle-off.css) | <img src="icons/toggle-off/toggle-off.png" width="30"> | PNG |
| toggle-on | `toggle-on-icon` | [toggle-on](https://github.com/Dellos7/local-icons/blob/master/icons/toggle-on/toggle-on.css) | <img src="icons/toggle-on/toggle-on.png" width="30"> | PNG |
| toggle-right | `toggle-right-icon` | [toggle-right](https://github.com/Dellos7/local-icons/blob/master/icons/toggle-right/toggle-right.css) | <img src="icons/toggle-right/toggle-right.png" width="30"> | PNG |
| toggle-up | `toggle-up-icon` | [toggle-up](https://github.com/Dellos7/local-icons/blob/master/icons/toggle-up/toggle-up.css) | <img src="icons/toggle-up/toggle-up.png" width="30"> | PNG |
| trademark | `trademark-icon` | [trademark](https://github.com/Dellos7/local-icons/blob/master/icons/trademark/trademark.css) | <img src="icons/trademark/trademark.png" width="30"> | PNG |
| train | `train-icon` | [train](https://github.com/Dellos7/local-icons/blob/master/icons/train/train.css) | <img src="icons/train/train.png" width="30"> | PNG |
| transgender-alt | `transgender-alt-icon` | [transgender-alt](https://github.com/Dellos7/local-icons/blob/master/icons/transgender-alt/transgender-alt.css) | <img src="icons/transgender-alt/transgender-alt.png" width="30"> | PNG |
| transgender | `transgender-icon` | [transgender](https://github.com/Dellos7/local-icons/blob/master/icons/transgender/transgender.css) | <img src="icons/transgender/transgender.png" width="30"> | PNG |
| trash-o | `trash-o-icon` | [trash-o](https://github.com/Dellos7/local-icons/blob/master/icons/trash-o/trash-o.css) | <img src="icons/trash-o/trash-o.png" width="30"> | PNG |
| trash | `trash-icon` | [trash](https://github.com/Dellos7/local-icons/blob/master/icons/trash/trash.css) | <img src="icons/trash/trash.png" width="30"> | PNG |
| tree | `tree-icon` | [tree](https://github.com/Dellos7/local-icons/blob/master/icons/tree/tree.css) | <img src="icons/tree/tree.png" width="30"> | PNG |
| trello | `trello-icon` | [trello](https://github.com/Dellos7/local-icons/blob/master/icons/trello/trello.css) | <img src="icons/trello/trello.png" width="30"> | PNG |
| tripadvisor | `tripadvisor-icon` | [tripadvisor](https://github.com/Dellos7/local-icons/blob/master/icons/tripadvisor/tripadvisor.css) | <img src="icons/tripadvisor/tripadvisor.png" width="30"> | PNG |
| trophy | `trophy-icon` | [trophy](https://github.com/Dellos7/local-icons/blob/master/icons/trophy/trophy.css) | <img src="icons/trophy/trophy.png" width="30"> | PNG |
| truck | `truck-icon` | [truck](https://github.com/Dellos7/local-icons/blob/master/icons/truck/truck.css) | <img src="icons/truck/truck.png" width="30"> | PNG |
| try | `try-icon` | [try](https://github.com/Dellos7/local-icons/blob/master/icons/try/try.css) | <img src="icons/try/try.png" width="30"> | PNG |
| tty | `tty-icon` | [tty](https://github.com/Dellos7/local-icons/blob/master/icons/tty/tty.css) | <img src="icons/tty/tty.png" width="30"> | PNG |
| tumblr-square | `tumblr-square-icon` | [tumblr-square](https://github.com/Dellos7/local-icons/blob/master/icons/tumblr-square/tumblr-square.css) | <img src="icons/tumblr-square/tumblr-square.png" width="30"> | PNG |
| tumblr | `tumblr-icon` | [tumblr](https://github.com/Dellos7/local-icons/blob/master/icons/tumblr/tumblr.css) | <img src="icons/tumblr/tumblr.png" width="30"> | PNG |
| turkish-lira | `turkish-lira-icon` | [turkish-lira](https://github.com/Dellos7/local-icons/blob/master/icons/turkish-lira/turkish-lira.css) | <img src="icons/turkish-lira/turkish-lira.png" width="30"> | PNG |
| tv | `tv-icon` | [tv](https://github.com/Dellos7/local-icons/blob/master/icons/tv/tv.css) | <img src="icons/tv/tv.png" width="30"> | PNG |
| twitch | `twitch-icon` | [twitch](https://github.com/Dellos7/local-icons/blob/master/icons/twitch/twitch.css) | <img src="icons/twitch/twitch.png" width="30"> | PNG |
| twitter-square | `twitter-square-icon` | [twitter-square](https://github.com/Dellos7/local-icons/blob/master/icons/twitter-square/twitter-square.css) | <img src="icons/twitter-square/twitter-square.png" width="30"> | PNG |
| twitter | `twitter-icon` | [twitter](https://github.com/Dellos7/local-icons/blob/master/icons/twitter/twitter.css) | <img src="icons/twitter/twitter.png" width="30"> | PNG |
| umbrella | `umbrella-icon` | [umbrella](https://github.com/Dellos7/local-icons/blob/master/icons/umbrella/umbrella.css) | <img src="icons/umbrella/umbrella.png" width="30"> | PNG |
| underline | `underline-icon` | [underline](https://github.com/Dellos7/local-icons/blob/master/icons/underline/underline.css) | <img src="icons/underline/underline.png" width="30"> | PNG |
| undo | `undo-icon` | [undo](https://github.com/Dellos7/local-icons/blob/master/icons/undo/undo.css) | <img src="icons/undo/undo.png" width="30"> | PNG |
| universal-access | `universal-access-icon` | [universal-access](https://github.com/Dellos7/local-icons/blob/master/icons/universal-access/universal-access.css) | <img src="icons/universal-access/universal-access.png" width="30"> | PNG |
| university | `university-icon` | [university](https://github.com/Dellos7/local-icons/blob/master/icons/university/university.css) | <img src="icons/university/university.png" width="30"> | PNG |
| unlink | `unlink-icon` | [unlink](https://github.com/Dellos7/local-icons/blob/master/icons/unlink/unlink.css) | <img src="icons/unlink/unlink.png" width="30"> | PNG |
| unlock-alt | `unlock-alt-icon` | [unlock-alt](https://github.com/Dellos7/local-icons/blob/master/icons/unlock-alt/unlock-alt.css) | <img src="icons/unlock-alt/unlock-alt.png" width="30"> | PNG |
| unlock | `unlock-icon` | [unlock](https://github.com/Dellos7/local-icons/blob/master/icons/unlock/unlock.css) | <img src="icons/unlock/unlock.png" width="30"> | PNG |
| unsorted | `unsorted-icon` | [unsorted](https://github.com/Dellos7/local-icons/blob/master/icons/unsorted/unsorted.css) | <img src="icons/unsorted/unsorted.png" width="30"> | PNG |
| upload | `upload-icon` | [upload](https://github.com/Dellos7/local-icons/blob/master/icons/upload/upload.css) | <img src="icons/upload/upload.png" width="30"> | PNG |
| usb | `usb-icon` | [usb](https://github.com/Dellos7/local-icons/blob/master/icons/usb/usb.css) | <img src="icons/usb/usb.png" width="30"> | PNG |
| usd | `usd-icon` | [usd](https://github.com/Dellos7/local-icons/blob/master/icons/usd/usd.css) | <img src="icons/usd/usd.png" width="30"> | PNG |
| user-circle-o | `user-circle-o-icon` | [user-circle-o](https://github.com/Dellos7/local-icons/blob/master/icons/user-circle-o/user-circle-o.css) | <img src="icons/user-circle-o/user-circle-o.png" width="30"> | PNG |
| user-circle | `user-circle-icon` | [user-circle](https://github.com/Dellos7/local-icons/blob/master/icons/user-circle/user-circle.css) | <img src="icons/user-circle/user-circle.png" width="30"> | PNG |
| user-md | `user-md-icon` | [user-md](https://github.com/Dellos7/local-icons/blob/master/icons/user-md/user-md.css) | <img src="icons/user-md/user-md.png" width="30"> | PNG |
| user-o | `user-o-icon` | [user-o](https://github.com/Dellos7/local-icons/blob/master/icons/user-o/user-o.css) | <img src="icons/user-o/user-o.png" width="30"> | PNG |
| user-plus | `user-plus-icon` | [user-plus](https://github.com/Dellos7/local-icons/blob/master/icons/user-plus/user-plus.css) | <img src="icons/user-plus/user-plus.png" width="30"> | PNG |
| user-secret | `user-secret-icon` | [user-secret](https://github.com/Dellos7/local-icons/blob/master/icons/user-secret/user-secret.css) | <img src="icons/user-secret/user-secret.png" width="30"> | PNG |
| user-times | `user-times-icon` | [user-times](https://github.com/Dellos7/local-icons/blob/master/icons/user-times/user-times.css) | <img src="icons/user-times/user-times.png" width="30"> | PNG |
| user | `user-icon` | [user](https://github.com/Dellos7/local-icons/blob/master/icons/user/user.css) | <img src="icons/user/user.png" width="30"> | PNG |
| users | `users-icon` | [users](https://github.com/Dellos7/local-icons/blob/master/icons/users/users.css) | <img src="icons/users/users.png" width="30"> | PNG |
| vcard-o | `vcard-o-icon` | [vcard-o](https://github.com/Dellos7/local-icons/blob/master/icons/vcard-o/vcard-o.css) | <img src="icons/vcard-o/vcard-o.png" width="30"> | PNG |
| vcard | `vcard-icon` | [vcard](https://github.com/Dellos7/local-icons/blob/master/icons/vcard/vcard.css) | <img src="icons/vcard/vcard.png" width="30"> | PNG |
| venus-double | `venus-double-icon` | [venus-double](https://github.com/Dellos7/local-icons/blob/master/icons/venus-double/venus-double.css) | <img src="icons/venus-double/venus-double.png" width="30"> | PNG |
| venus-mars | `venus-mars-icon` | [venus-mars](https://github.com/Dellos7/local-icons/blob/master/icons/venus-mars/venus-mars.css) | <img src="icons/venus-mars/venus-mars.png" width="30"> | PNG |
| venus | `venus-icon` | [venus](https://github.com/Dellos7/local-icons/blob/master/icons/venus/venus.css) | <img src="icons/venus/venus.png" width="30"> | PNG |
| viacoin | `viacoin-icon` | [viacoin](https://github.com/Dellos7/local-icons/blob/master/icons/viacoin/viacoin.css) | <img src="icons/viacoin/viacoin.png" width="30"> | PNG |
| viadeo-square | `viadeo-square-icon` | [viadeo-square](https://github.com/Dellos7/local-icons/blob/master/icons/viadeo-square/viadeo-square.css) | <img src="icons/viadeo-square/viadeo-square.png" width="30"> | PNG |
| viadeo | `viadeo-icon` | [viadeo](https://github.com/Dellos7/local-icons/blob/master/icons/viadeo/viadeo.css) | <img src="icons/viadeo/viadeo.png" width="30"> | PNG |
| video-camera | `video-camera-icon` | [video-camera](https://github.com/Dellos7/local-icons/blob/master/icons/video-camera/video-camera.css) | <img src="icons/video-camera/video-camera.png" width="30"> | PNG |
| vimeo-square | `vimeo-square-icon` | [vimeo-square](https://github.com/Dellos7/local-icons/blob/master/icons/vimeo-square/vimeo-square.css) | <img src="icons/vimeo-square/vimeo-square.png" width="30"> | PNG |
| vimeo | `vimeo-icon` | [vimeo](https://github.com/Dellos7/local-icons/blob/master/icons/vimeo/vimeo.css) | <img src="icons/vimeo/vimeo.png" width="30"> | PNG |
| vine | `vine-icon` | [vine](https://github.com/Dellos7/local-icons/blob/master/icons/vine/vine.css) | <img src="icons/vine/vine.png" width="30"> | PNG |
| vk | `vk-icon` | [vk](https://github.com/Dellos7/local-icons/blob/master/icons/vk/vk.css) | <img src="icons/vk/vk.png" width="30"> | PNG |
| volume-control-phone | `volume-control-phone-icon` | [volume-control-phone](https://github.com/Dellos7/local-icons/blob/master/icons/volume-control-phone/volume-control-phone.css) | <img src="icons/volume-control-phone/volume-control-phone.png" width="30"> | PNG |
| volume-down | `volume-down-icon` | [volume-down](https://github.com/Dellos7/local-icons/blob/master/icons/volume-down/volume-down.css) | <img src="icons/volume-down/volume-down.png" width="30"> | PNG |
| volume-off | `volume-off-icon` | [volume-off](https://github.com/Dellos7/local-icons/blob/master/icons/volume-off/volume-off.css) | <img src="icons/volume-off/volume-off.png" width="30"> | PNG |
| volume-up | `volume-up-icon` | [volume-up](https://github.com/Dellos7/local-icons/blob/master/icons/volume-up/volume-up.css) | <img src="icons/volume-up/volume-up.png" width="30"> | PNG |
| warning | `warning-icon` | [warning](https://github.com/Dellos7/local-icons/blob/master/icons/warning/warning.css) | <img src="icons/warning/warning.png" width="30"> | PNG |
| wechat | `wechat-icon` | [wechat](https://github.com/Dellos7/local-icons/blob/master/icons/wechat/wechat.css) | <img src="icons/wechat/wechat.png" width="30"> | PNG |
| weibo | `weibo-icon` | [weibo](https://github.com/Dellos7/local-icons/blob/master/icons/weibo/weibo.css) | <img src="icons/weibo/weibo.png" width="30"> | PNG |
| weixin | `weixin-icon` | [weixin](https://github.com/Dellos7/local-icons/blob/master/icons/weixin/weixin.css) | <img src="icons/weixin/weixin.png" width="30"> | PNG |
| whatsapp | `whatsapp-icon` | [whatsapp](https://github.com/Dellos7/local-icons/blob/master/icons/whatsapp/whatsapp.css) | <img src="icons/whatsapp/whatsapp.png" width="30"> | PNG |
| wheelchair-alt | `wheelchair-alt-icon` | [wheelchair-alt](https://github.com/Dellos7/local-icons/blob/master/icons/wheelchair-alt/wheelchair-alt.css) | <img src="icons/wheelchair-alt/wheelchair-alt.png" width="30"> | PNG |
| wheelchair | `wheelchair-icon` | [wheelchair](https://github.com/Dellos7/local-icons/blob/master/icons/wheelchair/wheelchair.css) | <img src="icons/wheelchair/wheelchair.png" width="30"> | PNG |
| wifi | `wifi-icon` | [wifi](https://github.com/Dellos7/local-icons/blob/master/icons/wifi/wifi.css) | <img src="icons/wifi/wifi.png" width="30"> | PNG |
| wikipedia-w | `wikipedia-w-icon` | [wikipedia-w](https://github.com/Dellos7/local-icons/blob/master/icons/wikipedia-w/wikipedia-w.css) | <img src="icons/wikipedia-w/wikipedia-w.png" width="30"> | PNG |
| window-close-o | `window-close-o-icon` | [window-close-o](https://github.com/Dellos7/local-icons/blob/master/icons/window-close-o/window-close-o.css) | <img src="icons/window-close-o/window-close-o.png" width="30"> | PNG |
| window-close | `window-close-icon` | [window-close](https://github.com/Dellos7/local-icons/blob/master/icons/window-close/window-close.css) | <img src="icons/window-close/window-close.png" width="30"> | PNG |
| window-maximize | `window-maximize-icon` | [window-maximize](https://github.com/Dellos7/local-icons/blob/master/icons/window-maximize/window-maximize.css) | <img src="icons/window-maximize/window-maximize.png" width="30"> | PNG |
| window-minimize | `window-minimize-icon` | [window-minimize](https://github.com/Dellos7/local-icons/blob/master/icons/window-minimize/window-minimize.css) | <img src="icons/window-minimize/window-minimize.png" width="30"> | PNG |
| window-restore | `window-restore-icon` | [window-restore](https://github.com/Dellos7/local-icons/blob/master/icons/window-restore/window-restore.css) | <img src="icons/window-restore/window-restore.png" width="30"> | PNG |
| windows | `windows-icon` | [windows](https://github.com/Dellos7/local-icons/blob/master/icons/windows/windows.css) | <img src="icons/windows/windows.png" width="30"> | PNG |
| won | `won-icon` | [won](https://github.com/Dellos7/local-icons/blob/master/icons/won/won.css) | <img src="icons/won/won.png" width="30"> | PNG |
| wordpress | `wordpress-icon` | [wordpress](https://github.com/Dellos7/local-icons/blob/master/icons/wordpress/wordpress.css) | <img src="icons/wordpress/wordpress.png" width="30"> | PNG |
| wpbeginner | `wpbeginner-icon` | [wpbeginner](https://github.com/Dellos7/local-icons/blob/master/icons/wpbeginner/wpbeginner.css) | <img src="icons/wpbeginner/wpbeginner.png" width="30"> | PNG |
| wpexplorer | `wpexplorer-icon` | [wpexplorer](https://github.com/Dellos7/local-icons/blob/master/icons/wpexplorer/wpexplorer.css) | <img src="icons/wpexplorer/wpexplorer.png" width="30"> | PNG |
| wpforms | `wpforms-icon` | [wpforms](https://github.com/Dellos7/local-icons/blob/master/icons/wpforms/wpforms.css) | <img src="icons/wpforms/wpforms.png" width="30"> | PNG |
| wrench | `wrench-icon` | [wrench](https://github.com/Dellos7/local-icons/blob/master/icons/wrench/wrench.css) | <img src="icons/wrench/wrench.png" width="30"> | PNG |
| xing-square | `xing-square-icon` | [xing-square](https://github.com/Dellos7/local-icons/blob/master/icons/xing-square/xing-square.css) | <img src="icons/xing-square/xing-square.png" width="30"> | PNG |
| xing | `xing-icon` | [xing](https://github.com/Dellos7/local-icons/blob/master/icons/xing/xing.css) | <img src="icons/xing/xing.png" width="30"> | PNG |
| y-combinator-square | `y-combinator-square-icon` | [y-combinator-square](https://github.com/Dellos7/local-icons/blob/master/icons/y-combinator-square/y-combinator-square.css) | <img src="icons/y-combinator-square/y-combinator-square.png" width="30"> | PNG |
| y-combinator | `y-combinator-icon` | [y-combinator](https://github.com/Dellos7/local-icons/blob/master/icons/y-combinator/y-combinator.css) | <img src="icons/y-combinator/y-combinator.png" width="30"> | PNG |
| yahoo | `yahoo-icon` | [yahoo](https://github.com/Dellos7/local-icons/blob/master/icons/yahoo/yahoo.css) | <img src="icons/yahoo/yahoo.png" width="30"> | PNG |
| yc-square | `yc-square-icon` | [yc-square](https://github.com/Dellos7/local-icons/blob/master/icons/yc-square/yc-square.css) | <img src="icons/yc-square/yc-square.png" width="30"> | PNG |
| yc | `yc-icon` | [yc](https://github.com/Dellos7/local-icons/blob/master/icons/yc/yc.css) | <img src="icons/yc/yc.png" width="30"> | PNG |
| yelp | `yelp-icon` | [yelp](https://github.com/Dellos7/local-icons/blob/master/icons/yelp/yelp.css) | <img src="icons/yelp/yelp.png" width="30"> | PNG |
| yen | `yen-icon` | [yen](https://github.com/Dellos7/local-icons/blob/master/icons/yen/yen.css) | <img src="icons/yen/yen.png" width="30"> | PNG |
| yoast | `yoast-icon` | [yoast](https://github.com/Dellos7/local-icons/blob/master/icons/yoast/yoast.css) | <img src="icons/yoast/yoast.png" width="30"> | PNG |
| youtube-play | `youtube-play-icon` | [youtube-play](https://github.com/Dellos7/local-icons/blob/master/icons/youtube-play/youtube-play.css) | <img src="icons/youtube-play/youtube-play.png" width="30"> | PNG |
| youtube-square | `youtube-square-icon` | [youtube-square](https://github.com/Dellos7/local-icons/blob/master/icons/youtube-square/youtube-square.css) | <img src="icons/youtube-square/youtube-square.png" width="30"> | PNG |
| youtube | `youtube-icon` | [youtube](https://github.com/Dellos7/local-icons/blob/master/icons/youtube/youtube.css) | <img src="icons/youtube/youtube.png" width="30"> | PNG |