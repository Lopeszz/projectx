<?php

namespace Laravel\Prompts;

use Closure;

class TextPrompt extends Prompt
{
    use Concerns\TypedValue;

    /**
     * Create a new TextPrompt instance.
     */
    public function __construct(
        public string $label,
        public string $placeholder = '',
        public string $default = '',
        public bool|string $required = false,
        public ?Closure $validate = null,
<<<<<<< HEAD
        public string $hint = ''
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    ) {
        $this->trackTypedValue($default);
    }

    /**
     * Get the entered value with a virtual cursor.
     */
    public function valueWithCursor(int $maxWidth): string
    {
        if ($this->value() === '') {
            return $this->dim($this->addCursor($this->placeholder, 0, $maxWidth));
        }

        return $this->addCursor($this->value(), $this->cursorPosition, $maxWidth);
    }
}
