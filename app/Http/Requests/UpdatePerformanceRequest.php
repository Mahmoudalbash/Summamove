<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerformanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'exercise_id' => 'sometimes|required|exists:exercises,id',
            'user_id' => 'sometimes|required|exists:users,id',
            'duration' => 'sometimes|required|integer|min:1',
            'speed' => 'nullable|numeric|min:0',
            'distance' => 'nullable|numeric|min:0',
        ];
    }
}
