<?php

namespace GetCandy\Http\Requests\Api\Shipping;

use GetCandy\Http\Requests\Api\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|in:standard,dhl',
            'name' => 'required|valid_structure:shipping_methods'
        ];
    }
}
