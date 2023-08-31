<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'password' => ['string', 'max:255'],
            'avatar' => ['string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'url_facebook' => ['string', 'max:255'],
            'url_twitter' => ['string', 'max:255'],
            'url_linkedin' => ['string', 'max:255'],
            'url_gme' => ['string', 'max:255'],
            'url_background' => ['string', 'max:255'],
            'url_instagram' => ['string', 'max:255'],
            'url_threads' => ['string', 'max:255'],
            'url_compagnie' => ['string', 'max:255'],
            'url_title' => ['string', 'max:255'],
            'role' => ['string', 'max:255', 'in:admin,user'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
