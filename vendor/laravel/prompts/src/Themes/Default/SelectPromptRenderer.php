<?php

namespace Laravel\Prompts\Themes\Default;

use Laravel\Prompts\SelectPrompt;
<<<<<<< HEAD
use Laravel\Prompts\Themes\Contracts\Scrolling;

class SelectPromptRenderer extends Renderer implements Scrolling
=======

class SelectPromptRenderer extends Renderer
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
{
    use Concerns\DrawsBoxes;
    use Concerns\DrawsScrollbars;

    /**
     * Render the select prompt.
     */
    public function __invoke(SelectPrompt $prompt): string
    {
        $maxWidth = $prompt->terminal()->cols() - 6;

        return match ($prompt->state) {
            'submit' => $this
                ->box(
                    $this->dim($this->truncate($prompt->label, $prompt->terminal()->cols() - 6)),
<<<<<<< HEAD
                    $this->truncate($prompt->label(), $maxWidth),
=======
                    $this->truncate($this->format($prompt->label()), $maxWidth),
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
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
                )
                ->warning($this->truncate($prompt->error, $prompt->terminal()->cols() - 5)),

            default => $this
                ->box(
                    $this->cyan($this->truncate($prompt->label, $prompt->terminal()->cols() - 6)),
                    $this->renderOptions($prompt),
                )
<<<<<<< HEAD
                ->when(
                    $prompt->hint,
                    fn () => $this->hint($prompt->hint),
                    fn () => $this->newLine() // Space for errors
                ),
=======
                ->newLine(), // Space for errors
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
        };
    }

    /**
     * Render the options.
     */
    protected function renderOptions(SelectPrompt $prompt): string
    {
<<<<<<< HEAD
        return $this->scrollbar(
            collect($prompt->visible())
                ->map(fn ($label) => $this->truncate($label, $prompt->terminal()->cols() - 12))
                ->map(function ($label, $key) use ($prompt) {
                    $index = array_search($key, array_keys($prompt->options));

                    if ($prompt->state === 'cancel') {
                        return $this->dim($prompt->highlighted === $index
=======
        return $this->scroll(
            collect($prompt->options)
                ->values()
                ->map(fn ($label) => $this->truncate($this->format($label), $prompt->terminal()->cols() - 12))
                ->map(function ($label, $i) use ($prompt) {
                    if ($prompt->state === 'cancel') {
                        return $this->dim($prompt->highlighted === $i
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                            ? "› ● {$this->strikethrough($label)}  "
                            : "  ○ {$this->strikethrough($label)}  "
                        );
                    }

<<<<<<< HEAD
                    return $prompt->highlighted === $index
                        ? "{$this->cyan('›')} {$this->cyan('●')} {$label}  "
                        : "  {$this->dim('○')} {$this->dim($label)}  ";
                })
                ->values(),
            $prompt->firstVisible,
            $prompt->scroll,
            count($prompt->options),
=======
                    return $prompt->highlighted === $i
                        ? "{$this->cyan('›')} {$this->cyan('●')} {$label}  "
                        : "  {$this->dim('○')} {$this->dim($label)}  ";
                }),
            $prompt->highlighted,
            min($prompt->scroll, $prompt->terminal()->lines() - 5),
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            min($this->longest($prompt->options, padding: 6), $prompt->terminal()->cols() - 6),
            $prompt->state === 'cancel' ? 'dim' : 'cyan'
        )->implode(PHP_EOL);
    }
<<<<<<< HEAD

    /**
     * The number of lines to reserve outside of the scrollable area.
     */
    public function reservedLines(): int
    {
        return 5;
    }
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}
