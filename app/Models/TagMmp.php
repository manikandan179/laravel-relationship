<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagMmp extends Model
{
    use HasFactory;
    public function posts(){
        return $this->morphToMany(PostMmp::class,'taggable');
    }
    public function videos(){
        return $this->morphToMany(VideoMmp::class,'taggable');
    }
}
