@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Iqamas for {{ $masjid->name }}</h5>
            </div>
            <div class="card-body">
                <div data-provide="calendar"></div>
            </div>
        </div>
    </div>
</div>
@endsection