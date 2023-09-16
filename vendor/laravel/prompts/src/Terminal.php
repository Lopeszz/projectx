<?php

namespace Laravel\Prompts;

<<<<<<< HEAD
use RuntimeException;
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
use Symfony\Component\Console\Terminal as SymfonyTerminal;

class Terminal
{
    /**
     * The initial TTY mode.
     */
    protected ?string $initialTtyMode;

    /**
     * The number of columns in the terminal.
     */
    protected int $cols;

    /**
     * The number of lines in the terminal.
     */
    protected int $lines;

    /**
     * Read a line from the terminal.
     */
    public function read(): string
    {
        $input = fread(STDIN, 1024);

        return $input !== false ? $input : '';
    }

    /**
     * Set the TTY mode.
     */
    public function setTty(string $mode): void
    {
<<<<<<< HEAD
        $this->initialTtyMode ??= $this->exec('stty -g');

        $this->exec("stty $mode");
=======
        $this->initialTtyMode ??= (shell_exec('stty -g') ?: null);

        shell_exec("stty $mode");
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }

    /**
     * Restore the initial TTY mode.
     */
    public function restoreTty(): void
    {
        if ($this->initialTtyMode) {
<<<<<<< HEAD
            $this->exec("stty {$this->initialTtyMode}");
=======
            shell_exec("stty {$this->initialTtyMode}");
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1

            $this->initialTtyMode = null;
        }
    }

    /**
     * Get the number of columns in the terminal.
     */
    public function cols(): int
    {
        return $this->cols ??= (new SymfonyTerminal())->getWidth();
    }

    /**
     * Get the number of lines in the terminal.
     */
    public function lines(): int
    {
        return $this->lines ??= (new SymfonyTerminal())->getHeight();
    }

    /**
     * Exit the interactive session.
     */
    public function exit(): void
    {
        exit(1);
    }
<<<<<<< HEAD

    /**
     * Execute the given command and return the output.
     */
    protected function exec(string $command): string
    {
        $process = proc_open($command, [
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ], $pipes);

        if (! $process) {
            throw new RuntimeException('Failed to create process.');
        }

        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        $code = proc_close($process);

        if ($code !== 0 || $stdout === false) {
            throw new RuntimeException(trim($stderr ?: "Unknown error (code: $code)"), $code);
        }

        return $stdout;
    }
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}
