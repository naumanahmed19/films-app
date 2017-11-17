<?php

namespace App\Http\Requests;

class CreateFilmRequest extends Request
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
            'title' => 'required',
            'content' => 'required',
            'category' => 'required|not_in:null',
            'country' => 'required|not_in:null',
            'releaseDate' => 'required',
            'ticketPrice' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
        ];
    }
}



