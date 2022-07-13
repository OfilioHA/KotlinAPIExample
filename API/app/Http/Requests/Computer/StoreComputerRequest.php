<?php

namespace App\Http\Requests\Computer;

use Illuminate\Foundation\Http\FormRequest;

class StoreComputerRequest extends FormRequest
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
            'model' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'type_id' => ['required', 'numeric'],
            'brand_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric']
        ];
    }
}
