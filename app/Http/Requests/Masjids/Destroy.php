<?php

namespace App\Http\Requests\Masjids;

use App\HttP\Requests\AbstractFormRequest;

class Destroy extends AbstractFormRequest
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
            //
        ];
    }
}
