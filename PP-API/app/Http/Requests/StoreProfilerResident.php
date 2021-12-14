<?php

namespace App\Http\Requests;

use App\Rules\profilerInfoIDRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProfilerResident extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'place_of_residence' => 'required|string|max:50|min:2',
            'profiler_infos_id' => ['required', 'int', new profilerInfoIDRule(),],
            'city_of_residence' => 'required|string|max:50|min:2',
            'country_of_residence' => 'required|string|max:50|min:2',
            'residence_longitude' => 'required|numeric',
            'residence_latitude' => 'required|numeric',
        ];
    }
}
