<?php

namespace App\Http\Resources\Settings\UserSetup;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class RoleResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $users = $this->whenLoaded('users');

        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'created_at'    => Carbon::parse($this->created_at)->format('d F Y H:i A'),
            'users'         => UserResource::collection($users),
        ];
    }
}
