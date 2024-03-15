<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'       => 'required',
            'description' => 'required',
            'date'        => 'required',
            'location'    => 'required',
            'participant' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'title.required'   => 'The title field is required!',
            'description.required'   => 'The description field is required!',
            'date.required'   => 'The date is required!',
            'location.required'   => 'The location field is required!',
        ];
    }
}
