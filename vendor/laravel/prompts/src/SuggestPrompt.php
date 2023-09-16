<?php

namespace Laravel\Prompts;

use Closure;
use Illuminate\Support\Collection;
<<<<<<< HEAD

class SuggestPrompt extends Prompt
{
    use Concerns\ReducesScrollingToFitTerminal;
    use Concerns\Truncation;
=======
use InvalidArgumentException;

class SuggestPrompt extends Prompt
{
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    use Concerns\TypedValue;

    /**
     * The index of the highlighted option.
     */
    public ?int $highlighted = null;

    /**
<<<<<<< HEAD
     * The index of the first visible option.
     */
    public int $firstVisible = 0;

    /**
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
     * The options for the suggest prompt.
     *
     * @var array<string>|Closure(string): array<string>
     */
    public array|Closure $options;

    /**
     * The cache of matches.
     *
     * @var array<string>|null
     */
    protected ?array $matches = null;

    /**
     * Create a new SuggestPrompt instance.
     *
     * @param  array<string>|Collection<int, string>|Closure(string): array<string>  $options
     */
    public function __construct(
        public string $label,
        array|Collection|Closure $options,
        public string $placeholder = '',
        public string $default = '',
        public int $scroll = 5,
        public bool|string $required = false,
        public ?Closure $validate = null,
<<<<<<< HEAD
        public string $hint = ''
    ) {
        $this->options = $options instanceof Collection ? $options->all() : $options;

        $this->reduceScrollingToFitTerminal();

        $this->on('key', fn ($key) => match ($key) {
            Key::UP, Key::UP_ARROW, Key::SHIFT_TAB => $this->highlightPrevious(),
            Key::DOWN, Key::DOWN_ARROW, Key::TAB => $this->highlightNext(),
            Key::ENTER => $this->selectHighlighted(),
            Key::LEFT, Key::LEFT_ARROW, Key::RIGHT, Key::RIGHT_ARROW => $this->highlighted = null,
=======
    ) {
        $this->options = $options instanceof Collection ? $options->all() : $options;

        $this->on('key', fn ($key) => match ($key) {
            Key::UP, Key::SHIFT_TAB => $this->highlightPrevious(),
            Key::DOWN, Key::TAB => $this->highlightNext(),
            Key::ENTER => $this->selectHighlighted(),
            Key::LEFT, Key::RIGHT => $this->highlighted = null,
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            default => (function () {
                $this->highlighted = null;
                $this->matches = null;
            })(),
        });

        $this->trackTypedValue($default);
    }

    /**
     * Get the entered value with a virtual cursor.
     */
    public function valueWithCursor(int $maxWidth): string
    {
        if ($this->highlighted !== null) {
            return $this->value() === ''
                ? $this->dim($this->truncate($this->placeholder, $maxWidth))
                : $this->truncate($this->value(), $maxWidth);
        }

        if ($this->value() === '') {
            return $this->dim($this->addCursor($this->placeholder, 0, $maxWidth));
        }

        return $this->addCursor($this->value(), $this->cursorPosition, $maxWidth);
    }

    /**
     * Get options that match the input.
     *
     * @return array<string>
     */
    public function matches(): array
    {
        if (is_array($this->matches)) {
            return $this->matches;
        }

        if ($this->options instanceof Closure) {
            return $this->matches = array_values(($this->options)($this->value()));
        }

        return $this->matches = array_values(array_filter($this->options, function ($option) {
            return str_starts_with(strtolower($option), strtolower($this->value()));
        }));
    }

    /**
<<<<<<< HEAD
     * The current visible matches.
     *
     * @return array<string>
     */
    public function visible(): array
    {
        return array_slice($this->matches(), $this->firstVisible, $this->scroll, preserve_keys: true);
    }

    /**
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
     * Highlight the previous entry, or wrap around to the last entry.
     */
    protected function highlightPrevious(): void
    {
        if ($this->matches() === []) {
            $this->highlighted = null;
        } elseif ($this->highlighted === null) {
            $this->highlighted = count($this->matches()) - 1;
        } elseif ($this->highlighted === 0) {
            $this->highlighted = null;
        } else {
            $this->highlighted = $this->highlighted - 1;
        }
<<<<<<< HEAD

        if ($this->highlighted < $this->firstVisible) {
            $this->firstVisible--;
        } elseif ($this->highlighted === count($this->matches()) - 1) {
            $this->firstVisible = count($this->matches()) - min($this->scroll, count($this->matches()));
        }
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }

    /**
     * Highlight the next entry, or wrap around to the first entry.
     */
    protected function highlightNext(): void
    {
        if ($this->matches() === []) {
            $this->highlighted = null;
        } elseif ($this->highlighted === null) {
            $this->highlighted = 0;
        } else {
            $this->highlighted = $this->highlighted === count($this->matches()) - 1 ? null : $this->highlighted + 1;
        }
<<<<<<< HEAD

        if ($this->highlighted > $this->firstVisible + $this->scroll - 1) {
            $this->firstVisible++;
        } elseif ($this->highlighted === 0 || $this->highlighted === null) {
            $this->firstVisible = 0;
        }
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }

    /**
     * Select the highlighted entry.
     */
    protected function selectHighlighted(): void
    {
        if ($this->highlighted === null) {
            return;
        }

        $this->typedValue = $this->matches()[$this->highlighted];
    }
<<<<<<< HEAD
=======

    /**
     * Truncate a value with an ellipsis if it exceeds the given length.
     */
    protected function truncate(string $value, int $length): string
    {
        if ($length <= 0) {
            throw new InvalidArgumentException("Length [{$length}] must be greater than zero.");
        }

        return mb_strlen($value) <= $length ? $value : (mb_substr($value, 0, $length - 1).'…');
    }
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}
