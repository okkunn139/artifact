<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class Group extends Model
{
    use HasFactory;
    
    public function users() {
        return $this->hasMany(User::class);
    }
    
    public function posts() {
        return $this->hasMany(Post::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
