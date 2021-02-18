<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
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
            "name" => "required|min:3|max:190",
            "city" => "min:3|max:190",
            "street" => "min:3|max:190",
            "street_no" => "min:3|max:20",
            "country" => "min:3|max:100",
            "postal_code" => "min:3|max:6"
        ];
    }
}
