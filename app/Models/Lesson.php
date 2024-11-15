<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = ['course_id', 'title', 'content', 'duration', 'order_num'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}