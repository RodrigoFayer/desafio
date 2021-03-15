<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StarshipRequest extends FormRequest
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
                Rule::unique('starships')
                    ->where('user_id', $this->user_id)

            ],
            'model' => 'required',
            'manufacturer' => 'required',
            'cost_in_credits' => 'required',
            'length' => 'required',
            'max_atmosphering_speed' => 'required',
            'crew' => 'required',
            'passengers' => 'required',
            'cargo_capacity' => 'required',
            'consumables' => 'required',
            'hyperdrive_rating' => 'required',
            'MGLT' => 'required',
            'starship_class' => 'required',
            'url' => [
                'required',
                Rule::unique('starships')
                    ->where('user_id', $this->user_id)

            ],

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nome',
            'model' => 'modelo',
            'manufacturer' => 'fabricante',
            'cost_in_credits' => 'preço',
            'length' => 'comprimento',
            'max_atmosphering_speed' => 'velocidade Maxima ',
            'crew' => 'equipe Técnica ',
            'passengers' => 'Capacidade de Passageiros ',
            'cargo_capacity' => 'capacidade de Carga',
            'consumables' => 'consumíveis',
            'hyperdrive_rating' => 'avaliação Hiperdrive ',
            'MGLT' => 'mglt',
            'starship_class' => 'classe',
            'url' => 'url',
        ];
    }
}
