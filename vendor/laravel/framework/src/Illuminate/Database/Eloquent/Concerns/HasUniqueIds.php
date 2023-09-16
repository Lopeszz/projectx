<?php

namespace Illuminate\Database\Eloquent\Concerns;

trait HasUniqueIds
{
    /**
     * Indicates if the model uses unique ids.
     *
     * @var bool
     */
    public $usesUniqueIds = false;

    /**
     * Determine if the model uses unique ids.
     *
     * @return bool
     */
    public function usesUniqueIds()
    {
        return $this->usesUniqueIds;
    }

    /**
<<<<<<< HEAD
     * Generate unique keys for the model.
=======
     * Generate a unique keys for model.
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
     *
     * @return void
     */
    public function setUniqueIds()
    {
        foreach ($this->uniqueIds() as $column) {
            if (empty($this->{$column})) {
                $this->{$column} = $this->newUniqueId();
            }
        }
    }

    /**
     * Generate a new key for the model.
     *
     * @return string
     */
    public function newUniqueId()
    {
        return null;
    }

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array
     */
    public function uniqueIds()
    {
        return [];
    }
}
