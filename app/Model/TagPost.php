<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    // protected $tabale='tag_posts';

    public function tagss(){
        return $this->belongsTo('App\Model\Tags');
        // return TagPost::where('post_id',$id)->get();
    }
 
}
