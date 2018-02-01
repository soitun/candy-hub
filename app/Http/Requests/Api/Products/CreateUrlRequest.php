<?php

namespace GetCandy\Http\Requests\Api\Products;

use GetCandy\Http\Requests\Api\FormRequest;

class CreateUrlRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return $this->user()->can('create', Product::class);
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
            'slug' => 'required|unique:routes,slug',
            // 'locale' => 'required|exists:languages,lang'
        ];
    }
}
