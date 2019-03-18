<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_name_field">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="masjid_name_field" value="{{ old('name', $masjid->name ?? null) }}" name="name" required>
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_phone_field">Phone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="masjid_phone_field" value="{{ old('phone', $masjid->phone ?? null) }}" name="phone">
        <div class="invalid-feedback">
            {{ $errors->first('phone') }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_phone_ext_field">Phone Ext</label>
        <input type="text" class="form-control {{ $errors->has('phone_ext') ? 'is-invalid' : '' }}" id="masjid_phone_ext_field" value="{{ old('phone_ext', $masjid->phone_ext ?? null) }}" name="phone_ext">
        <div class="invalid-feedback">
            {{ $errors->first('phone_ext') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_address_1_field">Address 1</label>
        <input type="text" class="form-control {{ $errors->has('address_1') ? 'is-invalid' : '' }}" id="masjid_address_1_field" value="{{ old('address_1', $masjid->address_1 ?? null) }}" name="address_1">
        <div class="invalid-feedback">
            {{ $errors->first('address_1') }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_address_2_field">Address 2</label>
        <input type="text" class="form-control {{ $errors->has('address_2') ? 'is-invalid' : '' }}" id="masjid_address_2_field" value="{{ old('address_2', $masjid->address_2 ?? null) }}" name="address_2">
        <div class="invalid-feedback">
            {{ $errors->first('address_2') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_city_field">City</label>
        <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" id="masjid_city_field" value="{{ old('city', $masjid->city ?? null) }}" name="city">
        <div class="invalid-feedback">
            {{ $errors->first('city') }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_state_field">State</label>
        <input type="text" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" id="masjid_state_field" value="{{ old('state', $masjid->state ?? null) }}" name="state">
        <div class="invalid-feedback">
            {{ $errors->first('state') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_zip_code_field">Zip Code</label>
        <input type="text" class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : '' }}" id="masjid_zip_code_field" value="{{ old('zip_code', $masjid->zip_code ?? null) }}" name="zip_code">
        <div class="invalid-feedback">
            {{ $errors->first('zip_code') }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_lat_field">Lat</label>
        <input type="text" class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" id="masjid_lat_field" value="{{ old('lat', $masjid->lat ?? null) }}" name="lat" required>
        <div class="invalid-feedback">
            {{ $errors->first('lat') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_lng_field">Lng</label>
        <input type="text" class="form-control {{ $errors->has('lng') ? 'is-invalid' : '' }}" id="masjid_lng_field" value="{{ old('lng', $masjid->lng ?? null) }}" name="lng" required>
        <div class="invalid-feedback">
            {{ $errors->first('lng') }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_hajji_date_adjustment_field">Hajji Date adjustment</label>
        <div class="form-group">
            <select class="form-control" id="hajji_date_adjustment" name="hajji_date_adjustment" required>
                <option value="2" {{ old('hajji_date_adjustment', $masjid->hajji_date_adjustment ?? null) == 2 ? 'selected' : '' }}>+2</option>
                <option value="1" {{ old('hajji_date_adjustment', $masjid->hajji_date_adjustment ?? null) == 1 ? 'selected' : '' }}>+1</option>
                <option value="0" {{ old('hajji_date_adjustment', $masjid->hajji_date_adjustment ?? null) == 0 ? 'selected' : '' }}>0</option>
                <option value="-1" {{ old('hajji_date_adjustment', $masjid->hajji_date_adjustment ?? null) == -1 ? 'selected' : '' }}>-1</option>
                <option value="-2" {{ old('hajji_date_adjustment', $masjid->hajji_date_adjustment ?? null) == -2 ? 'selected' : '' }}>-2</option>
            </select>
        </div>
        <div class="invalid-feedback">
            {{ $errors->first('hajji_date_adjustment') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_country_id_field">Country</label>
        <div class="form-group">
           <select class="form-control" id="country_id" name="country_id" required>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ old('country_id', $masjid->country_id ?? null) == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                @endforeach
           </select>
        </div>
        <div class="invalid-feedback">
            {{ $errors->first('country_id') }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="masjid_calculation_method_id_field">Calculation Method</label>
        <div class="form-group">
           <select class="form-control" id="calculation_method_id" name="calculation_method_id" required>
                @foreach ($calculationMethods as $calculationMethod)
                    <option value="{{ $calculationMethod->id }}" {{ old('calculation_method_id', $masjid->calculation_method_id ?? null) == $calculationMethod->id ? 'selected' : '' }}>{{ $calculationMethod->name }}</option>
                @endforeach
           </select>
        </div>
        <div class="invalid-feedback">
            {{ $errors->first('calculation_method_id') }}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="masjid_juristic_setting_id_field">Juristic setting</label>
        <div class="form-group">
           <select class="form-control" id="juristic_setting_id" name="juristic_setting_id" required>
                @foreach ($juristicSettings as $juristicSetting)
                    <option value="{{ $juristicSetting->id }}" {{ old('juristic_setting_id', $masjid->juristic_setting_id ?? null) == $juristicSetting->id ? 'selected' : '' }}>{{ $juristicSetting->name }}</option>
                @endforeach
           </select>
        </div>
        <div class="invalid-feedback">
            {{ $errors->first('juristic_setting_id') }}
        </div>
    </div>
</div>