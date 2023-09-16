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

use Iterator;

final class ComplexityCollectionIterator implements Iterator
{
    /**
     * @psalm-var list<Complexity>
     */
<<<<<<< HEAD
    private readonly array $items;
=======
    private array $items;
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    private int $position = 0;

    public function __construct(ComplexityCollection $items)
    {
        $this->items = $items->asArray();
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function current(): Complexity
    {
        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
