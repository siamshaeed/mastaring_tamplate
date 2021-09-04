<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'blog_title', 'blog_short_description', 'blog_long_description', 'blog_image', 'publication_status'];
}
