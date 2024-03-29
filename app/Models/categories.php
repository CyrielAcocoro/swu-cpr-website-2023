<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = ["name", "is_active"];

    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany(projects::class, 'category_id');
    }
}
