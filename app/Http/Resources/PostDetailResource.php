<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
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
        return[
            'title'=>$this->title,
            'thumbnail'=>$this->image,
            'published'=>$this->published_at,
            'category'=>$this->category(),
        ];
    }
}
