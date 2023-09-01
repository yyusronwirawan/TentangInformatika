<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OperatorResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'picture' => $this->picture,
            'roles' => $this->roles->map(fn ($role) => [
                'id' => $role->id,
                'name' => $role->name,
            ]),
        ];
    }
}
