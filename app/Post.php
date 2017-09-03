<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    //these are the allowed fields
    protected $fillable=['title','body'];

    //these are the forbidden fields
    //protected $guarded=['title','body'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
    	// Comment::create(
     //        [
     //        'body'=>$body,
     //        'post_id'=>$this->id
     //        ]
     //    );

    	$this->comments()->create(['body'=>$body]);
    }
}
