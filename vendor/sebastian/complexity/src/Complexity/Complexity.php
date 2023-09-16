<?php declare(strict_types=1);
/*
 * This file is part of sebastian/complexity.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Complexity;

/**
 * @psalm-immutable
 */
final class Complexity
{
<<<<<<< HEAD
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $name;

    /**
     * @psalm-var positive-int
     */
    private int $cyclomaticComplexity;

    /**
     * @psalm-param non-empty-string $name
     * @psalm-param positive-int $cyclomaticComplexity
     */
=======
    private string $name;
    private int $cyclomaticComplexity;

>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function __construct(string $name, int $cyclomaticComplexity)
    {
        $this->name                 = $name;
        $this->cyclomaticComplexity = $cyclomaticComplexity;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function name(): string
    {
        return $this->name;
    }

<<<<<<< HEAD
    /**
     * @psalm-return positive-int
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function cyclomaticComplexity(): int
    {
        return $this->cyclomaticComplexity;
    }
}
