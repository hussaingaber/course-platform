<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'meta_description',
        'media_id',
        'status',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
