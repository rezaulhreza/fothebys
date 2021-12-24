<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotStoreRequest extends FormRequest
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
           
            'category_id' => 'required|numeric',
            'year' => 'required|numeric|min:4',
            'title' => 'required',
           
            'lot_ref' => 'required|numeric',
            'artist' => 'required',
         
            'minimum' => 'numeric|gt:100|lt:estimated',
            'estimated' => 'required|numeric|gt:minimum',
           
            'additional' => 'nullable',
  
            'desc' => 'required',

            'lot_thumbnail' => 'required|mimes:png,jpg,gif',
            'lot_images' => 'required|mimes:png,jpg,gif',

            'start_date' => 'required|date|after:yesterday',
            
            'end_date' =>  'required|date|after:start_date',
       
            'status' => 'nullable',
        ];
    }
}