<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistrantSingleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'picture' => $this->picture,
            'biodata' => [
                'id' => $this->biodata->id,
                'user_id' => $this->biodata->user_id,
                'fullname' => $this->biodata->fullname,
                'whatsapp' => $this->biodata->whatsapp,
                'religion' => $this->biodata->religion,
                'sex' => $this->biodata->sex,
                'city' => $this->biodata->city,
                'birthday' => $this->biodata->birthday,
                'address' => $this->biodata->address,
                'university' => $this->biodata->university,
                'faculty' => $this->biodata->faculty,
                'major' => $this->biodata->major,
                'semester' => $this->biodata->semester,
                'father' => $this->biodata->father,
                'fatherWhatsapp' => $this->biodata->fatherWhatsapp,
                'mother' => $this->biodata->mother,
                'motherWhatsapp' => $this->biodata->motherWhatsapp,
                'vehicle' => $this->biodata->vehicle,
                'disease' => $this->biodata->disease,
                'goals' => $this->biodata->goals,
                'organizationsExp' => $this->biodata->organizationsExp,
            ],
        ];
    }
}
