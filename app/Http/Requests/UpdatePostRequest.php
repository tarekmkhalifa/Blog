<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ["required", "min:3", "unique:posts,title,". $this->post .",id"], //✓
            // 'title' => ['required','min:3', Rule::unique('posts', 'title')->ignore($this->post)], //✓
            'details' => 'required',
            'user_id' => 'exists:posts,user_id'
        ];
    }
}
