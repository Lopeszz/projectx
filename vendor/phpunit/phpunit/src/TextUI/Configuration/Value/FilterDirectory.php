<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class FilterDirectory
{
<<<<<<< HEAD
    /**
     * @psalm-var non-empty-string
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    private readonly string $path;
    private readonly string $prefix;
    private readonly string $suffix;

<<<<<<< HEAD
    /**
     * @psalm-param non-empty-string $path
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function __construct(string $path, string $prefix, string $suffix)
    {
        $this->path   = $path;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function path(): string
    {
        return $this->path;
    }

    public function prefix(): string
    {
        return $this->prefix;
    }

    public function suffix(): string
    {
        return $this->suffix;
    }
}
