<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CastMember extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cast_id' => $this->cast_id,
            'name' => $this->name,
            'original_image_url' => $this->original_image_url,
            'new_image_url' => $this->new_image_url
        ];
    }
}
