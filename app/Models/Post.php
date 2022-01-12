<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    protected $table = "posts";
    // protected $fillable = ['title', 'body'];
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class, 'post_author');
    }
}
