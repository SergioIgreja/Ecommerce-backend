<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
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
          'author' => $this->author->name,
          'title' => $this->title,
          'genre' => $this->genre->name,
          'description' => $this->description,
          'cover' => $this->cover,
          'price' => $this->price

        ];
    }
}
