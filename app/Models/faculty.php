<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    use HasFactory;

    protected $table = "faculties";
    protected $fillable = [
        'image',
        'first_name',
        'middle_name',
        'last_name',
        'specialization',
        'others',
        'position',
        'about',
        'is_active',
        'full_name',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    protected $casts = [
        'specialization' => 'json',
    ];
}
