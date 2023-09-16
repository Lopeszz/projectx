<?php

namespace Laravel\Prompts\Themes\Default;

use Laravel\Prompts\MultiSelectPrompt;
<<<<<<< HEAD
use Laravel\Prompts\Themes\Contracts\Scrolling;

class MultiSelectPromptRenderer extends Renderer implements Scrolling
=======

class MultiSelectPromptRenderer extends Renderer
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
{
    use Concerns\DrawsBoxes;
    use Concerns\DrawsScrollbars;

    /**
     * Render the multiselect prompt.
     */
    public function __invoke(MultiSelectPrompt $prompt): string
    {
        return match ($prompt->state) {
            'submit' => $this
                ->box(
                    $this->dim($this->truncate($prompt->label, $prompt->terminal()->cols() - 6)),
                    $this->renderSelectedOptions($prompt)
                ),

            'cancel' => $this
                ->box(
                    $this->truncate($prompt->label, $prompt->terminal()->cols() - 6),
                    $this->renderOptions($prompt),
                    color: 'red',
                )
                ->error('Cancelled.'),

            'error' => $this
                ->box(
                    $this->truncate($prompt->label, $prompt->terminal()->cols() - 6),
                    $this->renderOptions($prompt),
                    color: 'yellow',
<<<<<<< HEAD
                    info: count($prompt->options) > $prompt->scroll ? (count($prompt->value()).' selected') : '',
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                )
                ->warning($this->truncate($prompt->error, $prompt->terminal()->cols() - 5)),

            default => $this
                ->box(
                    $this->cyan($this->truncate($prompt->label, $prompt->terminal()->cols() - 6)),
                    $this->renderOptions($prompt),
<<<<<<< HEAD
                    info: count($prompt->options) > $prompt->scroll ? (count($prompt->value()).' selected') : '',
                )
                ->when(
                    $prompt->hint,
                    fn () => $this->hint($prompt->hint),
                    fn () => $this->newLine() // Space for errors
                ),
=======
                )
                ->newLine(), // Space for errors
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
        };
    }

    /**
     * Render the options.
     */
    protected function renderOptions(MultiSelectPrompt $prompt): string
    {
<<<<<<< HEAD
        return $this->scrollbar(
            collect($prompt->visible())
                ->map(fn ($label) => $this->truncate($label, $prompt->terminal()->cols() - 12))
                ->map(function ($label, $key) use ($prompt) {
                    $index = array_search($key, array_keys($prompt->options));
=======
        return $this->scroll(
            collect($prompt->options)
                ->values()
                ->map(fn ($label) => $this->truncate($this->format($label), $prompt->terminal()->cols() - 12))
                ->map(function ($label, $index) use ($prompt) {
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                    $active = $index === $prompt->highlighted;
                    if (array_is_list($prompt->options)) {
                        $value = $prompt->options[$index];
                    } else {
                        $value = array_keys($prompt->options)[$index];
                    }
                    $selected = in_array($value, $prompt->value());

                    if ($prompt->state === 'cancel') {
                        return $this->dim(match (true) {
                            $active && $selected => "› ◼ {$this->strikethrough($label)}  ",
                            $active => "› ◻ {$this->strikethrough($label)}  ",
                            $selected => "  ◼ {$this->strikethrough($label)}  ",
                            default => "  ◻ {$this->strikethrough($label)}  ",
                        });
                    }

                    return match (true) {
                        $active && $selected => "{$this->cyan('› ◼')} {$label}  ",
                        $active => "{$this->cyan('›')} ◻ {$label}  ",
                        $selected => "  {$this->cyan('◼')} {$this->dim($label)}  ",
                        default => "  {$this->dim('◻')} {$this->dim($label)}  ",
                    };
<<<<<<< HEAD
                })
                ->values(),
            $prompt->firstVisible,
            $prompt->scroll,
            count($prompt->options),
=======
                }),
            $prompt->highlighted,
            min($prompt->scroll, $prompt->terminal()->lines() - 5),
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            min($this->longest($prompt->options, padding: 6), $prompt->terminal()->cols() - 6),
            $prompt->state === 'cancel' ? 'dim' : 'cyan'
        )->implode(PHP_EOL);
    }

    /**
     * Render the selected options.
     */
    protected function renderSelectedOptions(MultiSelectPrompt $prompt): string
    {
        if (count($prompt->labels()) === 0) {
            return $this->gray('None');
        }

        return implode("\n", array_map(
<<<<<<< HEAD
            fn ($label) => $this->truncate($label, $prompt->terminal()->cols() - 6),
            $prompt->labels()
        ));
    }

    /**
     * The number of lines to reserve outside of the scrollable area.
     */
    public function reservedLines(): int
    {
        return 5;
    }
=======
            fn ($label) => $this->truncate($this->format($label), $prompt->terminal()->cols() - 6),
            $prompt->labels()
        ));
    }
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}
