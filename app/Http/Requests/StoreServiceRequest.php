<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:10', 'max:255'],
            'description' => ['required', 'min:10', 'max:1000'],
            'price' => ['required', 'min:0', 'max:3000000'],
            'category_id' => ['required', 'min:1'],
        ];
    }
}
