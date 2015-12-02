<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class DeviceBrandsRequest extends Request
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
        $rules = [];
        switch ($this->method()) {
            case 'POST':
                $rules = [
                    'id' => 'numeric',
                    'order_id' => 'numeric',
                ];
                break;

            default:
                # code...
                break;
        }
        // return [];
        return $rules;
    }

}
