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
   
}
