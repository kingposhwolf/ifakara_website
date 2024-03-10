<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required'
        ];
    }

    //Get the needed authorization credentials from the request
    public function getCredentials()
    {
        $name = $this->get('name');

        if ($this->isEmail($name)) {
            return [
                'email' => $name,
                'password' => $this->get('password')
            ];
        }

        return $this->only('name', 'password');
    }

    //To Validate if provided parameter is valid email.
    private function isEmail($param)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(
            ['uname' => $param],
            ['name' => 'email']
        )->fails();
    }
}
