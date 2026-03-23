<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $request->id,
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'bio'=> $request->bio,
            'job_title'=> $request->job_title,
            'image'=> $request->image === null?null:asset('storage/' . $request->image)
        ];
    }
}
