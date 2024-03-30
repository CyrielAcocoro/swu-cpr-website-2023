<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDetails extends Model
{
    use HasFactory;
    protected $table = "program_details";

    protected $fillable = [
        'about',
        'mission',
        'vision',
    ];
}
