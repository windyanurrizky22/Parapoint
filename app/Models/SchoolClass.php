<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
     protected $table = 'school_classes';
     protected $fillable = ['class_student'];

     public function student()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
