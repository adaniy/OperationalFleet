<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersoneliRequest extends FormRequest
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
            'nr_personal'=>['required'],
            'emri_mbiemri'=>['required'],
            'email'=>['required','email'],
            'data_lindjes'=>['required','date'],
            'nr_telefonite'=>['required','integer'],
            'niveli_shkollimit'=>['required'],
            'grupi_gjakut'=>['required'],
        ];
    }
}
