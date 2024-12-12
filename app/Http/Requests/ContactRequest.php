<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ];
    }

    public function store(ContactRequest $request)
{
    // Data sudah divalidasi otomatis oleh ContactRequest
    // Proses data (misalnya, simpan ke database atau kirim email)

    return redirect()->back()->with('success', 'Your message has been sent successfully!');
}

}