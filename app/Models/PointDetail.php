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
        'occurrence_number',
        'amount',
        'counted_point',
    ];

    public function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function pointCategory() {
        return $this->belongsTo(PointCategory::class, 'category_id');
    }

    public function teacher() { 
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}