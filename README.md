# 📱 PhoneDetector

**Redirect users to the correct app store depending on their phone's OS.**


## 📓 Installation (with Composer)

```bash
composer require ph-7/phonedetector
```


## 🎮  Usage

Below is a simple example of what you can do with **PhoneDetector** library.

```php
<?php
use PierreHenry\PhoneDetector\PhoneDetector;

$phoneDetector = new PhoneDetector();
if ($phoneDetector->isAndroid()) {
    echo 'Your mobile phone is Android!';
}

if ($phoneDetector->isIos()) {
    echo 'Your mobile phone is an iPhone!';
}
```


## 🚀 Author

[![Pierre-Henry Soria](https://avatars0.githubusercontent.com/u/1325411?s=200)](https://pierrehenry.be "My personal website :-)")

[![@phenrysay][twitter-image]][twitter-url]

**[Pierre-Henry Soria][author-url]**, a Passionate, Zen&Cool Belgian Software Engineer :belgium: :chocolate_bar:


## 😄 Used By...

I initially created PhoneDetector to redirect users to the correct app's store for *https://get.lifyzer.com* depending on the mobile device.

**[https://github.com/Lifyzer/get.lifyzer.com](https://github.com/Lifyzer/get.lifyzer.com)**


## ⚙ Server Requirement

PHP 7.3 or higher.


## ⚖ License

**PhoneDetector** library is generously distributed under [MIT License][license-url].


<!-- GitHub's Markdown reference links -->
[author-url]: https://pierrehenry.be
[license-url]: https://opensource.org/licenses/MIT
[twitter-image]: https://img.shields.io/twitter/url/https/shields.io.svg?style=social
[twitter-url]: https://twitter.com/phenrysay
