@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Create a new masjid</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('masjids.store') }}" method="POST">
                    @csrf
                    @include('masjids.partials.form-fields')
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
