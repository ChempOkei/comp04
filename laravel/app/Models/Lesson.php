<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'content',
        'supertube_url',
        'duration',
        'course_id',

    ];

    public function courses() {
        return $this->belongsTo(Course::class);
    }
}
