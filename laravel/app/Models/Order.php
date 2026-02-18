<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'user_id',
        'course_id',
        'certificate_number',
    ] ;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function course() {
        return $this->belongsTo(Course::class);
    }
}
