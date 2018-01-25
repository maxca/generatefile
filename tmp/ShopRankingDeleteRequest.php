<?php
namespace App\Http\Requests\ShopRanking;

use App\Http\Requests\Request;

class ShopRankingDeleteRequest extends Request
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
            'id' => 'required|exists:shopranking,id',
        ];
    }

}