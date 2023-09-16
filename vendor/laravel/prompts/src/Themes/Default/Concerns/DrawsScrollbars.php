<?php

namespace Laravel\Prompts\Themes\Default\Concerns;

use Illuminate\Support\Collection;

trait DrawsScrollbars
{
    /**
<<<<<<< HEAD
     * Render a scrollbar beside the visible items.
     *
     * @param  \Illuminate\Support\Collection<int, string>  $visible
     * @return \Illuminate\Support\Collection<int, string>
     */
    protected function scrollbar(Collection $visible, int $firstVisible, int $height, int $total, int $width, string $color = 'cyan'): Collection
    {
        if ($height >= $total) {
            return $visible;
        }

        $scrollPosition = $this->scrollPosition($firstVisible, $height, $total);

        return $visible
            ->values()
            ->map(fn ($line) => $this->pad($line, $width))
            ->map(fn ($line, $index) => match ($index) {
                $scrollPosition => preg_replace('/.$/', $this->{$color}('┃'), $line),
=======
     * Scroll the given lines.
     *
     * @param  \Illuminate\Support\Collection<int, string>  $lines
     * @return  \Illuminate\Support\Collection<int, string>
     */
    protected function scroll(Collection $lines, ?int $focused, int $height, int $width, string $color = 'cyan'): Collection
    {
        if ($lines->count() <= $height) {
            return $lines;
        }

        $visible = $this->visible($lines, $focused, $height);

        return $visible
            ->map(fn ($line) => $this->pad($line, $width))
            ->map(fn ($line, $index) => match (true) {
                $index === $this->scrollPosition($visible, $focused, $height, $lines->count()) => preg_replace('/.$/', $this->{$color}('┃'), $line),
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                default => preg_replace('/.$/', $this->gray('│'), $line),
            });
    }

    /**
<<<<<<< HEAD
     * Return the position where the scrollbar "handle" should be rendered.
     */
    protected function scrollPosition(int $firstVisible, int $height, int $total): int
    {
        if ($firstVisible === 0) {
            return 0;
        }

        $maxPosition = $total - $height;

        if ($firstVisible === $maxPosition) {
            return $height - 1;
        }

        if ($height <= 2) {
            return -1;
        }

        $percent = $firstVisible / $maxPosition;

        return (int) round($percent * ($height - 3)) + 1;
=======
     * Get a scrolled version of the items.
     *
     * @param  \Illuminate\Support\Collection<int, string>  $lines
     * @return  \Illuminate\Support\Collection<int, string>
     */
    protected function visible(Collection $lines, ?int $focused, int $height): Collection
    {
        if ($lines->count() <= $height) {
            return $lines;
        }

        if ($focused === null || $focused < $height) {
            return $lines->slice(0, $height);
        }

        return $lines->slice($focused - $height + 1, $height);
    }

    /**
     * Scroll the given lines.
     *
     * @param  \Illuminate\Support\Collection<int, string>  $visible
     */
    protected function scrollPosition(Collection $visible, ?int $focused, int $height, int $total): int
    {
        if ($focused < $height) {
            return 0;
        }

        if ($focused === $total - 1) {
            return $total - 1;
        }

        $percent = ($focused + 1 - $height) / ($total - $height);

        $keys = $visible->slice(1, -1)->keys();
        $position = (int) ceil($percent * count($keys) - 1);

        return $keys[$position] ?? 0;
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }
}
