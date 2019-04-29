@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0 card-link">Iqamas for {{ $masjid->name }}</h5>
            </div>
            <div class="card-body">
                <month-iqamas-component
                    :previous_month_route="{{ $previousMonthRoute }}"
                    :next_month_route="{{ $nextMonthRoute }}"
                    :update_route="{{ json_encode((route('masjids.iqamas.month.update', [$masjid, $year, $month]))) }}"
                    :masjid="{{ json_encode($masjid) }}" :iqamas="{{ $iqamas }}"
                    :days="{{ $days }}"
                >
                    @csrf
                    @method('PUT')
                </month-iqamas-component>
            </div>
        </div>
    </div>
</div>
@endsection