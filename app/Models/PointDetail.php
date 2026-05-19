<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointDetail extends Model
{
    protected $fillable = [
        'student_id',
        'teacher_id',
        'category_id',
        'initial_point',
    ];
}
