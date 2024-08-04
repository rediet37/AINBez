<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Auth;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('products_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'code_name' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'required',
            ],
            'location' => [
                'string',
                'required',
            ],
            'status' => [
                'string',
                'required',
            ],
            'year' => [
                'string',
                'required',
            ],
            'price' => [
                'string',
                'required',
            ],
            'discount' => [
                'string',
                'required',
            ],
            'category' => [
                'array',
                'required',
            ],
            'featured' => [
                'integer',
                'required',
            ],
            'postedBy' => [
                'integer',
                'required',
            ],
        ];
    }

    public function messages()
    {
        return [
            // 'product_pictures.required' => 'Please provide the Product Picture/s',
            'title.required' => 'Please provide the Product Title',
            'code_name.required'  => 'Please provide the Product Code Name',
            'description.required'  => 'Please provide the Product Description',
            'location.required'  => 'Please provide the Product Location',
            'status.required'  => 'Please provide the Product Status',
            'year.required'  => 'Please provide the Product Year',
            'price.required'  => 'Please provide the Product Price',
            'category.required'  => 'Please provide the Product Category',
            'featured.required'  => 'Please provide whether the Product is Featured',
            'postedBy.required'  => 'Please provide the Product Posted By',
        ];
    }
}
