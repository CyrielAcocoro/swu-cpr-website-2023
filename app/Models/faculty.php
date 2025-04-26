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
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getSpecializationDisplayAttribute()
    {
        // Handle null case first
        if (empty($this->specialization)) {
            return '';
        }

        // If it's already an array (thanks to the JSON cast)
        if (is_array($this->specialization)) {
            return implode(', ', $this->specialization);
        }

        // If it's a JSON string (fallback for any non-cast access)
        if (is_string($this->specialization)) {
            $decoded = json_decode($this->specialization, true);
            return is_array($decoded) ? implode(', ', $decoded) : $this->specialization;
        }
        // Fallback for any other case
        return (string) $this->specialization;
    }
    protected $casts = [
        'specialization' => 'json',
    ];
}
