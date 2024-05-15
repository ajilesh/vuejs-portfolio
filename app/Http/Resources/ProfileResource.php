<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->map(function ($post) {
                return [
                    'id' => $post->id,
                    'name' => $post->name,
                    'image' => $post->image
                ];
            }),
            'msg' => 'Fetch Profile'
        ];
    }
}
