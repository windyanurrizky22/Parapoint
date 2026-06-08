<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'class_id',
        'nis',
        'name',
        'current_point'
    ];

        public function schoolClass() {
         return $this->belongsTo(SchoolClass::class, 'class_id');
        }

        public function pointDetail() {
         return $this->hasMany(PointDetail::class);
         }
   

}
