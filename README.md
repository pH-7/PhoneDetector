# 📱 PhoneDetector

**Lightweight PHP 7.2 library that detects users' mobile phone based on the device OS.**


## 📓 Installation (with Composer)

```bash
composer require ph-7/phonedetector
```


## 🎮  Usage

Below are two simple examples of what you can do with **PhoneDetector** library.

### Example 1

```php
use PierreHenry\PhoneDetector\PhoneDetector;

$phoneDetector = new PhoneDetector();
if ($phoneDetector->isAndroid()) {
    echo 'Your mobile phone is Android!';
}

if ($phoneDetector->isIos()) {
    echo 'Your mobile phone runs with iOS';
}
```

### Example 2

```php
<?php
require 'vendor/autoload.php'; // Include Composer to load the library

use PierreHenry\PhoneDetector\PhoneDetector;

$phoneDetector = new PhoneDetector();

if ($phoneDetector->isAndroid()) {
    $url = 'https://play.google.com/store/apps/details?id=com.lifyzer';
} elseif($phoneDetector->isIos()) {
    $url = 'https://apps.apple.com/app/longer-life-lifyzer-food-scan/id1466196809';
} else {
    $url = 'https://DEFAULT-URL.example';
}

header('Location: ' . $url);
```


## ⚙ Server Requirement

- [PHP 7.2](https://php.net/releases/7_2_0.php) or higher.


## 🚀 Author

[![Pierre-Henry Soria](https://avatars0.githubusercontent.com/u/1325411?s=200)](https://pierrehenry.be "My personal website :-)")

[![@phenrysay][twitter-image]][twitter-url]

**[Pierre-Henry Soria][author-url]**, a Passionate, Zen&Cool Belgian Software Engineer :belgium: :chocolate_bar:


## 😄 Used By...

I initially created PhoneDetector to redirect users to the correct app's store for *https://get.lifyzer.com* depending on the mobile device.

**[https://github.com/Lifyzer/get.lifyzer.com](https://github.com/Lifyzer/get.lifyzer.com)**


## ⚖ License

**PhoneDetector** library is generously distributed under [MIT License][license-url].


<!-- GitHub's Markdown reference links -->
[author-url]: https://pierrehenry.be
[license-url]: https://opensource.org/licenses/MIT
[twitter-image]: https://img.shields.io/twitter/url/https/shields.io.svg?style=social
[twitter-url]: https://twitter.com/phenrysay
