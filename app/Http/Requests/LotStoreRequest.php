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
            'auction_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'year' => 'required|numeric|min:4',
            'title' => 'required',
           
            'lot_ref' => 'required|numeric',
            'artist' => 'required',
            
            'subject' => 'required',
            'period' => 'required',
            'location' => 'required',
            'estimated' => 'required|numeric|gt:minimum',
           
            'additional' => 'nullable',
  
            'desc' => 'required',

            'lot_thumbnail' => 'required',
            'lot_images' => 'required',

            'start_date' => 'required|date|after:yesterday',
            
            'end_date' =>  'required|date|after:start_date',
       
            'status' => 'nullable',
        ];
    }
}