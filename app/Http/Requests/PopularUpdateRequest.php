<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PopularUpdateRequest extends Request {

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
            'title'        => 'required',
            'subtitle'      => 'required',
            'description' => 'required'
           
        ];
    }

    /**
     * Return the fields and values to update a page from
     */
    public function pageFillData()
    {
        $inputs = $this->all();

        // dd($inputs);

        $inputs[ 'status' ] = $this->get( 'status') ? 1: 0;

        return $inputs;
    }
}
