<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    protected $fillable = ['code', 'subject', 'units', 'category_id'];

    protected function casts(): array
    {
        return [
            'code' => 'string',
            'subject' => 'string',
            'units' => 'integer',
            'category_id' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}