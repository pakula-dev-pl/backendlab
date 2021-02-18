<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequestUpdate extends FormRequest
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
            "external_id" => "exists:customer:id",
            "city" => "required|min:3|max:190",
            "street" => "required|min:3|max:190",
            "country" => "required|min:3|max:100",
            "postal_code" => "required|min:3|max:6"
        ];
    }
}
