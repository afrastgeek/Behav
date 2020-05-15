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

    /**
     * Get the behavior that commited in the activity.
     */
    public function behavior()
    {
        return $this->belongsTo('App\Behavior');
    }

    /**
     * Get the student that commited the activity.
     */
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
