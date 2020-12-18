<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch ($this->getMethod()) {
            case 'POST':
                return [
                    'name' => 'required',
                    'email' => 'required|unique:users,email',
                ];
            break;
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required',
                    'email' => 'required|unique:users,email,' . $this->user->id,
                ];
            break;
        }
    }
}
