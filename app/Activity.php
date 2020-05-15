<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Activity extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'behavior_student';
}
