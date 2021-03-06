<?php
namespace App\Http\Requests\Merchant_register;

use App\Http\Requests\Request;

class Merchant_registerUpdateRequest extends Request
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
            'id' => 'required|exists:merchant_register,id',
        ];
    }

}
