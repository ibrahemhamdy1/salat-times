@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Update Masjid</h5>
                <div class="ml-auto">
                    <form action="{{ route('masjids.destroy', $masjid->id) }}" method="post">
                        @method('DELETE')
                        @csrf()
                        <button type="submit" class="btn btn-danger btn-sm delete-confirm">Delete</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('masjids.update', $masjid->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    @include('masjids.partials.form-fields')
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
