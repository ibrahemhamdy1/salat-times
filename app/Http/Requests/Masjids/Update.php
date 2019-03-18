<?php

namespace App\Http\Requests\Masjids;

use App\HttP\Requests\AbstractFormRequest;

class Update extends AbstractFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->masjids()->find($this->masjid);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'phone_ext' => 'nullable|string|max:255',
            'address_1' => 'nullable|string|max:255',
            'address_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'lat' => 'required|numeric|between:-90,90.999999|regex:/^(?!\.?$)-?\d+(\.\d{0,6})?$/',
            'lng' => 'required|numeric|between:-180,180.999999|regex:/^(?!\.?$)-?\d+(\.\d{0,6})?$/',
            'country_id' => 'nullable|integer|exists:countries,id',
            'hajji_date_adjustment' => 'nullable|integer|max:2',
            'calculation_method_id' => 'nullable|integer|exists:calculation_methods,id',
            'juristic_setting_id' => 'nullable|integer|exists:juristic_settings,id',
        ];
    }
}
