<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class projects extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = [
        'files',
        'title',
        'description',
        'year_level',
        'semester',
        'subject_id',
        'school_year',
        'category_id',
        'faculty_id',
        'project_link',
        'is_featured',
        'is_published',
    ];

    protected $casts = [
        'developer' => 'json',
        'files' => 'json',
    ];

    public function projectAuthors()
    {
        return $this->belongsToMany(developers::class, 'project_developers');
    }

    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(subject::class);
    }

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(faculty::class);
    }
    public $timestamps = false;
}
