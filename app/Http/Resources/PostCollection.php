<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[

        'text' => $this->text,
        'user_id' => $this->user->name,
        'commentaires' => CommentCollection::collection($this->commentaires),
        ];
    }
}
