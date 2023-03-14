<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|max:20',
            'price'=>'required',
            'cover'=>'required|image',
            'description'=>'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome vendita richiesto',
            'name.max' => 'Hai superato i 20 carattere',
            'price.required' => 'Inserisci il prezzo',
            'cover.required' => 'Immagine richiesta',
            'cover.image' => 'Deve essere formato jpg, jpeg, png',
            'description.required' => 'Descrizione richiesta',
        ];
    }
}
