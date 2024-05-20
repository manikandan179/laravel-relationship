<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoMmp extends Model
{
    use HasFactory;
    public function tags(){
        return $this->morphToMany(TagMmp::class,'taggable');
    }
}
