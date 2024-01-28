<?php

namespace App\Http\Resources\Settings\UserSetup;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $role = $this->whenLoaded('role');

        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'role_id'       => $this->role_id,
            'username'      => $this->username,
            'email'         => $this->email,
            'created_at'    => Carbon::parse($this->created_at)->format('d F Y H:i A'),
            'role'          => new RoleResource($role),
        ];
    }
}
