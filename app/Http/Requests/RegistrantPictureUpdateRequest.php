<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrantPictureUpdateRequest extends FormRequest
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
            // 'picture' => 'required|image|mimes:jpg,jpeg|file|max:1024', // max 1mb
            'picture' => ['required', 'image', 'mimes:jpg,jpeg,png', 'file', 'max:1024'], // max 1mb
            'oldPicture' => ['nullable'], // max 1mb
        ];
    }
}
