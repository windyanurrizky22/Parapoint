<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PointDetail extends Model
{
    protected $fillable = [
        'student_id',
        'teacher_id',
        'category_id',
        'initial_point',
        'remaining_point',
    ];

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function teacher():BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function pointCategory():BelongsTo
    {
        return $this->belongsTo(PointCategory::class, 'category_id');
    }
}
