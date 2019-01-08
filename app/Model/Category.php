<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    protected $table='categories';
    // protected $primaryKey = 'id';

    public static function category_post($slug){
        return self::join('category_post','category_post.category_id','categories.id')->join('posts','posts.id','category_post.post_id')
            ->select('posts.id','categories.name','categories.slug','posts.excerpted','posts.title','posts.image','posts.published_at')
            ->where('categories.slug',$slug)
            ->orderby('posts.published_at','DES')->paginate(15);
        // return self::where('categories.slug',$slug)->get();
    }

    
    
}
