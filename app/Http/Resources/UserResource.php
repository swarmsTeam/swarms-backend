<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->id,
            'college_name' => $this->profile->collage_name ?? 'null',
            'user_skills' => $this->skills->pluck('skill')->toArray(),
            'user_interests' => $this->interests->pluck('interest')->toArray()
        ];
    }
}
