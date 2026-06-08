<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PointCategory extends Model
{
    protected $fillable =[
        'category_type',
        'amount',
        'description',
    ];

    public function pointDetail()
    {
        return $this->hasMany(PointDetail::class, 'category_id');
    }
}
