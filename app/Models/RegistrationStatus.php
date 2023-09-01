<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationStatus extends Model
{
    use HasFactory;

    public static function getRegistrationStatus()
    {
        $data = RegistrationStatus::query()->where('id', 1)->select('status')->first()->status;

        return $data == 1 ? true : false;
    }
}
