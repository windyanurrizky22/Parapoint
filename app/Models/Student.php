<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    protected $fillable = ['class_id','nis','name'];

    public function SchoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

}
