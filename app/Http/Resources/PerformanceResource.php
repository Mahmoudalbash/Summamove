<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PerformanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'exercise_id' => $this->exercise_id,
            'user_id' => $this->user_id,
            'duration' => $this->duration,
            'speed' => $this->speed,
            'distance' => $this->distance,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => $this->when($this->relationLoaded('user'), [
                'id' => $this->user?->id,
                'name' => $this->user?->name,
            ]),
            'exercise' => $this->when($this->relationLoaded('exercise'), [
                'id' => $this->exercise?->id,
                'name' => $this->exercise?->name,
            ]),
        ];
    }
}
