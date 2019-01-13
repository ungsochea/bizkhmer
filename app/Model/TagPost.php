<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    // protected $tabale='tag_posts';

    public function tags($id){
        // return $this->hasMany(Tags::class);
        // return TagPost::where('tag_id',$id)->first();
        return Tags::find($id);
    }
 
}
