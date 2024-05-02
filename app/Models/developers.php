<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developers extends Model
{
    use HasFactory;

    protected $table = "developers";
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'city',
        'province',
        'country',
        'image',
        'full_name'
    ];

    public function projects()
    {
        return $this->belongsToMany(projects::class, 'project_developers');
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = $value;
        $this->attributes['full_name'] = trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }

    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = $value;
        $this->attributes['full_name'] = trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = $value;
        $this->attributes['full_name'] = trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }
}
