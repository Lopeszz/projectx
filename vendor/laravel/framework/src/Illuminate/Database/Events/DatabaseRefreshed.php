<?php

namespace Illuminate\Database\Events;

use Illuminate\Contracts\Database\Events\MigrationEvent as MigrationEventContract;

class DatabaseRefreshed implements MigrationEventContract
{
<<<<<<< HEAD
    /**
     * Create a new event instance.
     *
     * @param  string|null  $database
     * @param  bool  seeding
     * @return void
     */
    public function __construct(
        public ?string $database = null,
        public bool $seeding = false
    ) {
        //
    }
=======
    //
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}
