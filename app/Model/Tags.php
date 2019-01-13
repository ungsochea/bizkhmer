<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table='tags';    
    // public function tag(){
    //     return $this->belongsTo(CategoryPost::class);
    //     // return TagPost::where('post_id',$id)->get();
    // }
    public static function posts($name){
        return TagPost::join('tags','tags.id','tag_posts.tag_id')
        ->join('posts','posts.id','tag_posts.post_id')
        ->select('tag_posts.*','posts.id','posts.excerpted','posts.title','posts.image','posts.published_at')
        ->where('tags.name',$name)
        ->get();
    }
   
}
