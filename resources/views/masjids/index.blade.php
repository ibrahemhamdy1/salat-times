@extends('layouts.app')

@section('content')
   <div class="row">
       <div class="col-12">
           <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="mb-0">Masjids</h5>
                    <div class="ml-auto">
                        <a href="{{ route('masjids.create') }}" class="btn btn-primary btn-sm ml-2">Create</a>
                    </div>
                </div>
               <div class="card-body">
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th scope="col">name</th>
                               <th scope="col">Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                            @foreach ($masjids as $masjid)
                               <tr>
                                   <td>{{ $masjid->name }}</td>
                                   <td><a href="{{ route('masjids.edit', $masjid->id) }}" class="btn btn-success">Edit</a></td>
                               </tr>
                            @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
@endsection