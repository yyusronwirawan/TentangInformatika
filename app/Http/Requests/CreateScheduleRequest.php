<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateScheduleRequest extends FormRequest
{
    protected $errorBag = 'scheduleDelition';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'location' => ['required', 'string', 'min:5', 'max:255'],
            'time' => ['required', 'date_format:H:i'],
            'date_start' => ['required', 'date'],
            'date_end' => ['required', 'date', 'after:date_start'],
        ];
    }
}
