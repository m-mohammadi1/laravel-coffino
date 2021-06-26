<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseServiceRequest extends FormRequest
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
            // 'description' => ['string'],
            'count' => ['min:1', 'max:1000000'],
            'category' => ['required'],
            'service' => ['required'],
            'optional_count' => ['max:1000000', 'required_without:count'],
            'link' => ['required', 'min:5', 'max:1024'],
        ];
    }
}
