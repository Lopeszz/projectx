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

use function count;
use Countable;
use IteratorAggregate;

/**
 * @psalm-immutable
 */
final class ComplexityCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<Complexity>
     */
<<<<<<< HEAD
    private readonly array $items;
=======
    private array $items;
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1

    public static function fromList(Complexity ...$items): self
    {
        return new self($items);
    }

    /**
     * @psalm-param list<Complexity> $items
     */
    private function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @psalm-return list<Complexity>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): ComplexityCollectionIterator
    {
        return new ComplexityCollectionIterator($this);
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    public function cyclomaticComplexity(): int
    {
        $cyclomaticComplexity = 0;

        foreach ($this as $item) {
            $cyclomaticComplexity += $item->cyclomaticComplexity();
        }

        return $cyclomaticComplexity;
    }
}
