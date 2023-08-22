<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Post extends Model
{
    use HasFactory;
    
    public function group() {
        return $this->belongsTo(Group::class);
    }
}
