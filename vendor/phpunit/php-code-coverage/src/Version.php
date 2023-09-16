<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use function dirname;
use SebastianBergmann\Version as VersionId;

final class Version
{
    private static string $version = '';

    public static function id(): string
    {
        if (self::$version === '') {
<<<<<<< HEAD
            self::$version = (new VersionId('10.1.5', dirname(__DIR__)))->asString();
=======
            self::$version = (new VersionId('10.1.3', dirname(__DIR__)))->asString();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
        }

        return self::$version;
    }
}
