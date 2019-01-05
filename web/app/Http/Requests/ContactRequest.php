<?php

namespace App\Http\Requests;

class ContactRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone'=>  'required|min:9|max:20',
        ];
    }

      /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'Địa chỉ email',
            'name' => 'Họ và tên',
            'phone'=>'Số điện thoại',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc.',
            'email'=>':attribute không đúng định dạng.',
            'max'=>':attribute không vượt quá :max',
            'min'=>':attribute lớn hơn :min',
        ];
    }
}
