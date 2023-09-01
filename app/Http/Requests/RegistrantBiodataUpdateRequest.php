<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrantBiodataUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => ['required', 'string', 'max:255'],
            'whatsapp' => ['numeric', 'min_digits:10', 'max_digits:15'],
            'religion' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'city' => ['string', 'max:255'],
            'birthday' => ['string'],
            'address' => ['max:255'],
            'university' => ['string', 'max:255'],
            'faculty' => ['string', 'max:255'],
            'major' => ['string', 'max:255'],
            'semester' => ['integer', 'max:8'],
            'father' => ['string', 'max:255'],
            'fatherWhatsapp' => ['string'],
            'mother' => ['string', 'max:255'],
            'motherWhatsapp' => ['string'],
            'vehicle' => ['required', 'string', 'max:255'],
            'disease' => ['string'],
            'goals' => ['string', 'min:30'],
            'organizationsExp' => ['string'],
        ];
    }
}
