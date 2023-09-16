<?php

namespace Laravel\Prompts\Concerns;

use Laravel\Prompts\Key;

trait TypedValue
{
    /**
     * The value that has been typed.
     */
    protected string $typedValue = '';

    /**
     * The position of the virtual cursor.
     */
    protected int $cursorPosition = 0;

    /**
<<<<<<< HEAD
=======
     * Keys to ignore
     *
     * @var array<string>
     */
    protected array $ignore = [
        Key::ENTER,
        Key::TAB,
        Key::CTRL_C,
        Key::CTRL_D,
    ];

    /**
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
     * Track the value as the user types.
     */
    protected function trackTypedValue(string $default = '', bool $submit = true): void
    {
        $this->typedValue = $default;

        if ($this->typedValue) {
            $this->cursorPosition = mb_strlen($this->typedValue);
        }

        $this->on('key', function ($key) use ($submit) {
            if ($key[0] === "\e") {
                match ($key) {
<<<<<<< HEAD
                    Key::LEFT, Key::LEFT_ARROW => $this->cursorPosition = max(0, $this->cursorPosition - 1),
                    Key::RIGHT, Key::RIGHT_ARROW => $this->cursorPosition = min(mb_strlen($this->typedValue), $this->cursorPosition + 1),
=======
                    Key::LEFT => $this->cursorPosition = max(0, $this->cursorPosition - 1),
                    Key::RIGHT => $this->cursorPosition = min(mb_strlen($this->typedValue), $this->cursorPosition + 1),
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                    Key::DELETE => $this->typedValue = mb_substr($this->typedValue, 0, $this->cursorPosition).mb_substr($this->typedValue, $this->cursorPosition + 1),
                    default => null,
                };

                return;
            }

            // Keys may be buffered.
            foreach (mb_str_split($key) as $key) {
                if ($key === Key::ENTER && $submit) {
                    $this->submit();

                    return;
                } elseif ($key === Key::BACKSPACE) {
                    if ($this->cursorPosition === 0) {
                        return;
                    }

                    $this->typedValue = mb_substr($this->typedValue, 0, $this->cursorPosition - 1).mb_substr($this->typedValue, $this->cursorPosition);
                    $this->cursorPosition--;
<<<<<<< HEAD
                } elseif (ord($key) >= 32) {
=======
                } elseif (! in_array($key, $this->ignore)) {
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                    $this->typedValue = mb_substr($this->typedValue, 0, $this->cursorPosition).$key.mb_substr($this->typedValue, $this->cursorPosition);
                    $this->cursorPosition++;
                }
            }
        });
    }

    /**
     * Get the value of the prompt.
     */
    public function value(): string
    {
        return $this->typedValue;
    }

    /**
     * Add a virtual cursor to the value and truncate if necessary.
     */
    protected function addCursor(string $value, int $cursorPosition, int $maxWidth): string
    {
<<<<<<< HEAD
        $before = mb_substr($value, 0, $cursorPosition);
        $current = mb_substr($value, $cursorPosition, 1);
        $after = mb_substr($value, $cursorPosition + 1);

        $cursor = mb_strlen($current) ? $current : ' ';

        $spaceBefore = $maxWidth - mb_strwidth($cursor) - (mb_strwidth($after) > 0 ? 1 : 0);
        [$truncatedBefore, $wasTruncatedBefore] = mb_strwidth($before) > $spaceBefore
            ? [$this->trimWidthBackwards($before, 0, $spaceBefore - 1), true]
            : [$before, false];

        $spaceAfter = $maxWidth - ($wasTruncatedBefore ? 1 : 0) - mb_strwidth($truncatedBefore) - mb_strwidth($cursor);
        [$truncatedAfter, $wasTruncatedAfter] = mb_strwidth($after) > $spaceAfter
            ? [mb_strimwidth($after, 0, $spaceAfter - 1), true]
            : [$after, false];

        return ($wasTruncatedBefore ? $this->dim('…') : '')
            .$truncatedBefore
            .$this->inverse($cursor)
            .$truncatedAfter
            .($wasTruncatedAfter ? $this->dim('…') : '');
    }

    /**
     * Get a truncated string with the specified width from the end.
     */
    private function trimWidthBackwards(string $string, int $start, int $width): string
    {
        $reversed = implode('', array_reverse(mb_str_split($string, 1)));

        $trimmed = mb_strimwidth($reversed, $start, $width);

        return implode('', array_reverse(mb_str_split($trimmed, 1)));
=======
        $offset = $cursorPosition - $maxWidth + ($cursorPosition < mb_strlen($value) ? 2 : 1);
        $offset = $offset > 0 ? $offset + 1 : 0;
        $offsetCursorPosition = $cursorPosition - $offset;

        $output = $offset > 0 ? $this->dim('…') : '';
        $output .= mb_substr($value, $offset, $offsetCursorPosition);

        if ($cursorPosition > mb_strlen($value) - 1) {
            return $output.$this->inverse(' ');
        }

        $output .= $this->inverse(mb_substr($value, $cursorPosition, 1));

        if ($cursorPosition === mb_strlen($value) - 1) {
            return $output.' ';
        }

        $remainder = mb_substr($value, $cursorPosition + 1);
        $remainingSpace = $maxWidth - $offsetCursorPosition - ($offset ? 2 : 1);

        if (mb_strlen($remainder) <= $remainingSpace) {
            return $output.$remainder;
        }

        return $output.mb_substr($remainder, 0, $remainingSpace - 1).$this->dim('…');
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }
}
