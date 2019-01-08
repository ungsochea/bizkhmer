<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'thumbnail'=>$this->image,
            'category'=>$this->category('post_id')
            
            // 'category'=>CategoryPostResource::collection($this->category),
            // 'tag'=>$this->tags($this->id),
            // 'data'=>$this->published_at,            
        ];
    }
}
