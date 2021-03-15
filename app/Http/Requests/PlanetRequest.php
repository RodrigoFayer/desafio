<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlanetRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('planets')
                    ->where('user_id', $this->user_id)

            ],
            'rotation_period' => 'required',
            'orbital_period' => 'required',
            'diameter' => 'required',
            'climate' => 'required',
            'gravity' => 'required',
            'terrain' => 'required',
            'surface_water' => 'required',
            'population' => 'required',
            'url' => [
                'required',
                Rule::unique('planets')
                    ->where('user_id', $this->user_id)

            ],
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nome',
            'rotation_period' => 'periodo de rotação',
            'orbital_period' => 'periodo de orbital',
            'diameter' => 'diametro',
            'climate' => 'clima',
            'gravity' => 'gravidade',
            'terrain' => 'terreno',
            'surface_water' => 'agua',
            'population' => 'População',
            'url' => 'url',
        ];
    }
}
