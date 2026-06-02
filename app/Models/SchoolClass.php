<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolClass extends Model
{
     protected $fillable = ['class_student'];

     public function student()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
