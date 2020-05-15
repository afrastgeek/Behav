<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['activity', 'point'];

    /**
     * The students that have commited the behavior.
     */
    public function students()
    {
        return $this->belongsToMany('App\Student')->withPivot('commited_at')->withTimestamps();
    }
}
