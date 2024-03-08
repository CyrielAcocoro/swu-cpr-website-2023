<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $table = "subjects";
    protected $fillable = [
        'subject_code',
        'name',
        'description',
        'is_active',
        'full_subject',
    ];
}
