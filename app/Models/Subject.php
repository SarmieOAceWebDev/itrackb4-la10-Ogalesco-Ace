<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model

{
    protected $fillable = ['code', 'subject', 'units', 'category'];
 
    protected function casts(): array
    {
        return [
                 // your integer column
        ];
    }
}

