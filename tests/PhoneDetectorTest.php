<?php
/**
 * @author         Pierre-Henry Soria <hi@ph7.me>
 * @link           https://pierrehenry.be
 * @copyright      (c) 2019, Pierre-Henry Soria. All Rights Reserved.
 * @license        MIT License
 */

declare(strict_types=1);

namespace PierreHenry\PhoneDetector\Tests;

use PHPUnit\Framework\TestCase;
use PierreHenry\PhoneDetector\PhoneDetector;

class PhoneDetectorTest extends TestCase
{
    private const UBUNTU_BRAVE_USER_AGENT = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36 Brave/74';
    private const IOS_SAFARI_USER_AGENT = 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_3 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13E198 Safari/601.1';
    private const ANDROID_CHROME_USER_AGENT = 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G930F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36';

    public function testIsIosDevice(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = self::IOS_SAFARI_USER_AGENT;
        $phoneDetector = new PhoneDetector();
        $this->assertTrue($phoneDetector->isIos());
    }

    public function testIsAndroidDevice(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = self::ANDROID_CHROME_USER_AGENT;
        $phoneDetector = new PhoneDetector();
        $this->assertTrue($phoneDetector->isAndroid());
    }

    public function testIsNotIosDevice(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = self::ANDROID_CHROME_USER_AGENT;
        $phoneDetector = new PhoneDetector();
        $this->assertFalse($phoneDetector->isIos());
    }

    public function testIsNotAndroidDevice(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = self::IOS_SAFARI_USER_AGENT;
        $phoneDetector = new PhoneDetector();
        $this->assertFalse($phoneDetector->isAndroid());
    }
}
