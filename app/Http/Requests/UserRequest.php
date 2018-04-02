<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * UserRequest
 * 
 * @version 1.0.0
 * @since 1.0.0
 * @author Uday Kumar
 *
 */
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
        return [
            'nome' => 'required|max:127|unique:users,nome',
            'mail' => 'required|email|max:127|unique:users,mail',
            'senha' => 'required'
        ];
    }
}
//end of class UserRequest
//end of file UserRequest.php