<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbbreviationMajor extends Model
{
    use HasFactory;
    protected $table = 'abbreviations_majors';
    protected $fillable = [
        'name',
        'major_id'
    ];
}
