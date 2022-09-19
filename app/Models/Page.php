<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'language', 'slug', 'heading', 'details', 'meta_title', 'meta_key', 'meta_des'
    ];
}
