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
        'amount',
        'occurrence_number',
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

        // Tambahan: Kalau datanya dihapus, poinnya balik lagi (opsional)
    protected static function booted()
{
    // Gunakan 'saved' supaya mencakup 'created' dan 'updated'
    static::saved(function ($pointDetail) {
        $student = $pointDetail->student;
        
        if ($student) {
            // Kita hitung ulang total semua poin dari nol agar akurat
            $initialPoint = 150;
            $totalPoinDetail = PointDetail::where('student_id', $pointDetail->student_id)
                                        ->sum('counted_point');
            
            $student->update([
                'current_point' => $initialPoint + $totalPoinDetail
            ]);
        }
    });

    static::deleted(function ($pointDetail) {
        // Hitung ulang juga pas ada data yang dihapus
        $student = $pointDetail->student;
        if ($student) {
            $totalPoinDetail = PointDetail::where('student_id', $pointDetail->student_id)
                                        ->sum('counted_point');
            $student->update([
                'current_point' => 150 + $totalPoinDetail
            ]);
        }
    });
}

    
}