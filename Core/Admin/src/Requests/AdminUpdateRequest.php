<?php


namespace Core\Admin\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AdminUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route()->parameter('admin');
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:admins,email,' . $id,
        ];
        if ($country = auth_user()->country_id) {
            $rules['country_id'] = 'required|exists:countries,id|in:' . $country;
        }
        return $rules;
    }
}
