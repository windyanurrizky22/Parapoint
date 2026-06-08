<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $fillable = ['teacher_name']; 

        public function pointDetail()
    {
        return $this->hasMany(PointDetail::class);
    }
}
