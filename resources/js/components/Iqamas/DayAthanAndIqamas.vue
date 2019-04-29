<template>
  <fragment>
        <td class="text-cneter">
            <span class="d-block">{{ moment(new Date(day)).format('Do') }}</span>
            <span>{{ moment(new Date(day)).format('dddd') }}</span>
        </td>
        <td>5:{{ 10 }}AM</td>
        <td>
            <div class="input-group">
                <input
                    class="form-control iqama-input"
                    :type="getInputType(this, iqamas.fajr)"
                    :data-athan="'5:' + (10) + 'AM'"
                    :name="'iqamas[' + day + '][fajr]'"
                    :value="iqamas.fajr"
                    @input="iqamaChanged"
                >
            </div>
        </td>
        <td>12:{{ 13 }}PM</td>
        <td>
            <div class="input-group">
                <input
                    class="form-control iqama-input"
                    :type="getInputType(this, iqamas.dhuher)"
                    :data-athan="'12:' + (10) + 'PM'"
                    :name="'iqamas[' + day + '][dhuher]'"
                    :value="iqamas.dhuher"
                    @input="iqamaChanged"
                >
            </div>
        </td>
        <td>3:{{ 15 }}PM</td>
        <td>
            <div class="input-group">
                <input
                    class="form-control iqama-input"
                    :type="getInputType(this, iqamas.asr)"
                    :data-athan="'3:' + (10) + 'PM'"
                    :name="'iqamas[' + day + '][asr]'"
                    :value="iqamas.asr"
                    @input="iqamaChanged"
                >
            </div>
        </td>
        <td>6:{{ 16}}PM</td>
        <td>
            <div class="input-group">
                <input
                    class="form-control iqama-input"
                    :type="getInputType(this, iqamas.maghirb)"
                    :data-athan="'6:' + (10) + 'PM'"
                    :name="'iqamas[' + day + '][maghirb]'"
                    :value="iqamas.maghirb"
                    @input="iqamaChanged"
                >
            </div>
        </td>
        <td>8:{{ 18 }}PM</td>
        <td>
            <div class="input-group">
                <input
                    class="form-control iqama-input"
                    :type="getInputType(this, iqamas.isha)"
                    :data-athan="'8:' + (10) + 'PM'"
                    :name="'iqamas[' + day + '][isha]'"
                    :value="iqamas.isha"
                    @input="iqamaChanged"
                >
            </div>
        </td>
  </fragment>
</template>

<script>
    export default {
        props: ['day', 'iqamas'],
        methods: {
            iqamaChanged({target}) {
                let inputValue = target.value;

                if (inputValue.charAt(0) == '+' || inputValue.charAt(0) == '-') {
                    let iqamaTime = moment($(target).data('athan'), 'LTS').add(parseInt(target.value), 'minutes').format('LT');

                    if (!iqamaTime.includes("NaN")) {
                        $(target).css("position", "relative");
                        $(target).parent().find('.iqama-hint').remove();

                        $(target).parent().append(`
                            <span class="iqama-hint d-none d-md-block"> ` + iqamaTime + `</span>
                        `);
                    }
                } else if (!inputValue.charAt(4)) {
                    $(target).val(inputValue);
                    $(target).parent().find('.iqama-hint').remove();
                    $(target).attr("type", "time");
                    $(target).parent().parent().append(`
                        <div class="convert-iqama-input-type text-center"><small>Add +minutes format</small></div>
                    `);
                }
            },
            getInputType(div, iqama) {
                if (iqama && !(iqama.charAt(0) == '+' || iqama.charAt(0) == '-')) {
                    return 'time';
                }

                return 'text';
            },
        },
    }
</script>