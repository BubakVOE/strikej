<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'mobile' => 'required|numeric',
            'datum' => 'required',
            'email' => 'required|email',
        ];
    }


    public function messages()
    {
        return[
            'firstName.required' => 'firstName je požadováno',
            'lastName.required' => 'lastName je požadováno',
            
            'mobile.required' => 'Číslo je požadováno',
            'mobile.numeric' => 'Číslo musí obsahovat pouze čísla',
            // 'mobile.max' => 'Maximálně 9 ciferné číslo',
            'datum.required' => 'datum je požadováno',
            'email.required' => 'email je požadováno',
        ];
    }
}
