<?php

namespace Illuminate\Validation\Rules;

<<<<<<< HEAD
use BackedEnum;
use UnitEnum;

=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
class NotIn
{
    /**
     * The name of the rule.
     *
     * @var string
     */
    protected $rule = 'not_in';

    /**
     * The accepted values.
     *
     * @var array
     */
    protected $values;

    /**
     * Create a new "not in" rule instance.
     *
     * @param  array  $values
     * @return void
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        $values = array_map(function ($value) {
<<<<<<< HEAD
            $value = match (true) {
                $value instanceof BackedEnum => $value->value,
                $value instanceof UnitEnum => $value->name,
                default => $value,
            };

=======
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            return '"'.str_replace('"', '""', $value).'"';
        }, $this->values);

        return $this->rule.':'.implode(',', $values);
    }
}
