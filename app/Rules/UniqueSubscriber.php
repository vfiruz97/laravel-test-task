<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueSubscriber implements Rule
{
    protected $web_set_id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($web_set_id)
    {
        $this->web_set_id = $web_set_id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return DB::table('subscribers')
            ->where('email', $value)
            ->where('web_site_id', $this->web_set_id)
            ->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This subscriber`s already been subsribed';
    }
}
