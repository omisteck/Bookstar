<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|string|max:255",
            "description" => "sometimes|string|max:255|nullable",
            "ingredients" => "required|string|max:255",
            "time" => "required|string",
            "image" => "required|image|mimes:jpeg,png,jpg|max:3048",
        ];
    }
}
