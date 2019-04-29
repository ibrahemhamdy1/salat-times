<template>
    <div>
        <form :action="update_route" method="POST">
            <slot></slot>
            <div class="d-flex justify-content-between mb-2">
                <div class="mt-2">
                    <a :href="previous_month_route" class="btn btn-success btn-sm">
                        &larr; {{ moment(Object.keys(this.theDays), 'Y-M-D').add(-1, 'months').format('MMMM') }}
                    </a>
                </div>
                <div>
                    <h1>{{ moment(Object.keys(this.theDays), 'Y-M-D').format('MMMM YYYY') }}</h1>
                </div>
                <div class="mt-2">
                    <a :href="next_month_route" class="btn btn-success btn-sm justify-content-end">
                        {{ moment(Object.keys(this.theDays), 'Y-M-D').add(1, 'months').format('MMMM') }} &rarr;
                    </a>
                </div>
            </div>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Fajr Athan</th>
                        <th>Fajr Iqama</th>
                        <th>Dhuher Athan</th>
                        <th>Dhuher Iqama</th>
                        <th>Asr Athan</th>
                        <th>Asr Iqama</th>
                        <th>Maghirb Athan</th>
                        <th>Maghirb Iqama</th>
                        <th>Isha Athan</th>
                        <th>Isha Iqama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(iqamas, day) in this.theDays" :key="day">
                        <day-than-and-iqamas :day="day" :iqamas="iqamas" />
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</template>

<script>
    import DayAthanAndIqamas from './DayAthanAndIqamas.vue';

    export default {
        props: [
            'masjid',
            'iqamas',
            'days',
            'previous_month_route',
            'next_month_route',
            'update_route'
        ],
        components: {
            'day-than-and-iqamas' : DayAthanAndIqamas,
        },
        computed: {
            theMasjid() {
                return this.masjid;
            },
            theIqamas() {
                return this.iqamas;
            },
            theDays() {
                return this.days;
            },
        }
    }
</script>