<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id_number', 'name'];

    /**
     * The behaviors that have commited by the student.
     */
    public function behaviors()
    {
        return $this->belongsToMany('App\Behavior')->withPivot('commited_at')->withTimestamps();
    }
}
