<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostRresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'content' => $this->content,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'comments' => CommentRresource::collection($this->commentaires),
        ];
    }
}
