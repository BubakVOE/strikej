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
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'car' => 'required',
            'type' => 'required',
        ];
    }


    public function messages()
    {
        return[
            'firstName.required' => 'firstName je požadováno',
            'lastName.required' => 'lastName je požadováno',
            'email.required' => 'email je požadováno',
            
            'phone.required' => 'Číslo je požadováno',
            'phone.numeric' => 'Číslo musí obsahovat pouze čísla',
            // 'mobile.max' => 'Maximálně 9 ciferné číslo',
            'car.required' => 'car je požadováno',
            'type.required' => 'type je požadováno',
        ];
    }
}
