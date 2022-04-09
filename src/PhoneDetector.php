<?php
/**
 * @author         Pierre-Henry Soria <hi@ph7.me>
 * @link           https://pierrehenry.be
 * @copyright      (c) 2019-2022, Pierre-Henry Soria. All Rights Reserved.
 * @license        MIT License
 */

declare(strict_types=1);

namespace PierreHenry\PhoneDetector;

class PhoneDetector
{
    private const REGEX_IOS = '#(iPhone|iPad|iPod)#i';
    private const REGEX_ANDROID = '#android#i';

    /** @var string */
    private $userAgent;

    public function __construct()
    {
        $this->userAgent = $this->getUserAgent();
    }

    public function isIos(): bool
    {
        return $this->testUserAgentWith(self::REGEX_IOS);
    }

    public function isAndroid(): bool
    {
        return $this->testUserAgentWith(self::REGEX_ANDROID);
    }

    private function testUserAgentWith(string $regex): bool
    {
        return (bool)preg_match($regex, $this->userAgent);
    }

    private function getUserAgent(): string
    {
        return $_SERVER['HTTP_USER_AGENT'] ?? '';
    }
}
