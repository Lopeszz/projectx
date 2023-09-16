<?php

namespace Laravel\Prompts;

use Closure;

class ConfirmPrompt extends Prompt
{
    /**
     * Whether the prompt has been confirmed.
     */
    public bool $confirmed;

    /**
     * Create a new ConfirmPrompt instance.
     */
    public function __construct(
        public string $label,
        public bool $default = true,
        public string $yes = 'Yes',
        public string $no = 'No',
        public bool|string $required = false,
        public ?Closure $validate = null,
<<<<<<< HEAD
        public string $hint = ''
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    ) {
        $this->confirmed = $default;

        $this->on('key', fn ($key) => match ($key) {
            'y' => $this->confirmed = true,
            'n' => $this->confirmed = false,
<<<<<<< HEAD
            Key::TAB, Key::UP, Key::UP_ARROW, Key::DOWN, Key::DOWN_ARROW, Key::LEFT, Key::LEFT_ARROW, Key::RIGHT, Key::RIGHT_ARROW, 'h', 'j', 'k', 'l' => $this->confirmed = ! $this->confirmed,
=======
            Key::TAB, Key::UP, Key::DOWN, Key::LEFT, Key::RIGHT, 'h', 'j', 'k', 'l' => $this->confirmed = ! $this->confirmed,
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            Key::ENTER => $this->submit(),
            default => null,
        });
    }

    /**
     * Get the value of the prompt.
     */
    public function value(): bool
    {
        return $this->confirmed;
    }

    /**
     * Get the label of the selected option.
     */
    public function label(): string
    {
        return $this->confirmed ? $this->yes : $this->no;
    }
}
