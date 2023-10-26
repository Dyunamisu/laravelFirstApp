<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function post(){
        return $this->belongsto(Post::class);
    }
    public function author(){
        return $this->belongsto(User::class,'user_id');
    }
}


