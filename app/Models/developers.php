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
        return $this->belongsToMany(projects::class, 'project_developers', 'developers_id', 'projects_id');
    }
    public function setFullNameAttribute()
    {
        $this->attributes['full_name'] = trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }
}
