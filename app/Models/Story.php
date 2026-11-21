<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'axolotl_id'
    ];

    public function axolotl(): BelongsTo
    {
        return $this->belongsTo(Axolotl::class);
    }
}
