<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'have_taken' => $this->getHaveTaken(),
            'total_taken' => $this->getTotalTaken(),
            'taken_in_current_month' => $this->getTakenInCurrentMonth()
        ];
    }
}
