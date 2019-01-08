<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table='category_post';
    // protected $primaryKey = 'id';
  

    public function categories(){
        return $this->belongsTo(Category::class);
        // return TagPost::where('post_id',$id)->get();
    }

    public static function get_title($id){
        return self::where('post_id',$id)->get();
    }

    

}
