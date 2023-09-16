<?php

namespace Laravel\Prompts\Concerns;

use Laravel\Prompts\Output\BufferedConsoleOutput;
<<<<<<< HEAD

=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
use function Termwind\render;
use function Termwind\renderUsing;

trait Termwind
{
    protected function termwind(string $html)
    {
        renderUsing($output = new BufferedConsoleOutput());

        render($html);

        return $this->restoreEscapeSequences($output->fetch());
    }

    protected function restoreEscapeSequences(string $string)
    {
        return preg_replace('/\[(\d+)m/', "\e[".'\1m', $string);
    }
}
