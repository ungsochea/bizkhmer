<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function cat(){
        return $this->belongsTo(CategoryPost::class);
    }
    public function category(){
        return $this->hasMany(CategoryPost::class);
        // return CategoryPost::where('post_id',$id)->get();
    }
    public function tags($id){
        return TagPost::where('post_id',$id)->get();
    }
    public static function trending(){
        return CategoryPost::join('posts','posts.id','category_post.post_id')->join('categories','categories.id','category_post.category_id')
        ->select('posts.id','posts.title','categories.slug')
        ->orderby('posts.id','DESC')
        ->take(5)->get();
        // return self::join('category_post','posts.id','category_post.post_id')
        // // ->join('categories','categories.id','category_post.post_id')
        // ->select('posts.title','posts.published_at','category_post.*')
        // ->orderby('posts.published_at','DESC')
        // ->limit(5)
        // ->get();
        // return CategoryPost::join('posts','posts.id','category_post.id')
        // ->join('categories','categories.id','category_post.post_id')
        // ->select('posts.title','posts.published_at','category_post.category_id')
        // ->orderby('posts.published_at','DESC')
        // ->limit(5)
        // ->get();
    }
}
