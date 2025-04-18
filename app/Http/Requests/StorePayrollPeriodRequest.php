<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePayrollPeriodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // You can put custom authorization logic here.
        // Return true if authorized, false if not.
        return true; // Typically set to true unless you have specific authorization rules.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'month' => 'string|max:255',
            'year' => 'string|max:500',
        ];
    }
}
