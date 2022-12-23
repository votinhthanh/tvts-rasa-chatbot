<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'reference_score',
        'entrance_score',
        'subjects_combination',
        'target',
        'information',
        'tuition'
    ];

    protected $casts = [
        'subjects_combination' => 'array'
    ];
}
