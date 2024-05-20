<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostNew extends Model
{
    use HasFactory;
    public function commentsNew() {
        return $this->morphMany(CommentNew::class, 'commentable');
    }
}
