<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;

class HomeController extends Controller
{
    public function trending(){
        return Post::trending();
        // return Post::select('id','title')->latest()->limit(5)->get();
    }
    public function top_post(){
        
    }
}
