<?php


namespace Core\Settings\Requests;


use Illuminate\Foundation\Http\FormRequest;

class LandingPageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth(SUPER_ADMIN)->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'parent_id' => 'required|exists:landing_page,id'
        ];
        if (request()->route()->methods == ['PUT', 'PATCH']) {
            unset($rules['image']);
        }
        return $rules;

    }
}