<?php

namespace Laravel\Prompts\Themes\Default\Concerns;

use Laravel\Prompts\Prompt;

trait DrawsBoxes
{
    protected int $minWidth = 60;

    /**
     * Draw a box.
<<<<<<< HEAD
     *
     * @return $this
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
     */
    protected function box(
        string $title,
        string $body,
        string $footer = '',
        string $color = 'gray',
<<<<<<< HEAD
        string $info = '',
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    ): self {
        $this->minWidth = min($this->minWidth, Prompt::terminal()->cols() - 6);

        $bodyLines = collect(explode(PHP_EOL, $body));
        $footerLines = collect(explode(PHP_EOL, $footer))->filter();
        $width = $this->longest(
            $bodyLines
                ->merge($footerLines)
                ->push($title)
                ->toArray()
        );

<<<<<<< HEAD
        $topBorder = str_repeat('─', $width - mb_strwidth($this->stripEscapeSequences($title)));
=======
        $topBorder = str_repeat('─', $width - mb_strlen($this->stripEscapeSequences($title)));
        $bottomBorder = str_repeat('─', $width + 2);

>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
        $this->line("{$this->{$color}(' ┌')} {$title} {$this->{$color}($topBorder.'┐')}");

        $bodyLines->each(function ($line) use ($width, $color) {
            $this->line("{$this->{$color}(' │')} {$this->pad($line, $width)} {$this->{$color}('│')}");
        });

        if ($footerLines->isNotEmpty()) {
<<<<<<< HEAD
            $this->line($this->{$color}(' ├'.str_repeat('─', $width + 2).'┤'));
=======
            $this->line($this->{$color}(' ├'.$bottomBorder.'┤'));
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1

            $footerLines->each(function ($line) use ($width, $color) {
                $this->line("{$this->{$color}(' │')} {$this->pad($line, $width)} {$this->{$color}('│')}");
            });
        }

<<<<<<< HEAD
        $this->line($this->{$color}(' └'.str_repeat(
            '─', $info ? ($width - mb_strwidth($this->stripEscapeSequences($info))) : ($width + 2)
        ).($info ? " {$info} " : '').'┘'));
=======
        $this->line($this->{$color}(' └'.$bottomBorder.'┘'));
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1

        return $this;
    }

    /**
     * Get the length of the longest line.
     *
     * @param  array<string>  $lines
     */
    protected function longest(array $lines, int $padding = 0): int
    {
        return max(
            $this->minWidth,
            collect($lines)
<<<<<<< HEAD
                ->map(fn ($line) => mb_strwidth($this->stripEscapeSequences($line)) + $padding)
=======
                ->map(fn ($line) => mb_strlen($this->stripEscapeSequences($line)) + $padding)
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                ->max()
        );
    }

    /**
     * Pad text ignoring ANSI escape sequences.
     */
    protected function pad(string $text, int $length): string
    {
<<<<<<< HEAD
        $rightPadding = str_repeat(' ', max(0, $length - mb_strwidth($this->stripEscapeSequences($text))));
=======
        $rightPadding = str_repeat(' ', max(0, $length - mb_strlen($this->stripEscapeSequences($text))));
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1

        return "{$text}{$rightPadding}";
    }

    /**
     * Strip ANSI escape sequences from the given text.
     */
    protected function stripEscapeSequences(string $text): string
    {
<<<<<<< HEAD
        $text = preg_replace("/\e[^m]*m/", '', $text);

        return preg_replace("/<(?:(?:[fb]g|options)=[a-z,;]+)+>(.*?)<\/>/i", '$1', $text);
=======
        return preg_replace("/\e[^m]*m/", '', $text);
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }
}
