<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            // 'post_id'=>$this->post_id,
            'tag_id'=>$this->tag_id,
            'tag_name'=>$this->tags($this->tag_id)->name,
        ];
    }
}
