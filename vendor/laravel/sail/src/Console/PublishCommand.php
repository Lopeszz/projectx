<?php

namespace Laravel\Sail\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sail:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the Laravel Sail Docker files';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'sail-docker']);
        $this->call('vendor:publish', ['--tag' => 'sail-database']);

        file_put_contents(
            $this->laravel->basePath('docker-compose.yml'),
            str_replace(
                [
<<<<<<< HEAD
                    './vendor/laravel/sail/runtimes/8.3',
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                    './vendor/laravel/sail/runtimes/8.2',
                    './vendor/laravel/sail/runtimes/8.1',
                    './vendor/laravel/sail/runtimes/8.0',
                    './vendor/laravel/sail/database/mysql',
                    './vendor/laravel/sail/database/pgsql'
                ],
                [
<<<<<<< HEAD
                    './docker/8.3',
=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
                    './docker/8.2',
                    './docker/8.1',
                    './docker/8.0',
                    './docker/mysql',
                    './docker/pgsql'
                ],
                file_get_contents($this->laravel->basePath('docker-compose.yml'))
            )
        );
    }
}
