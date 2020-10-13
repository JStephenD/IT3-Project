@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">  
    {{-- <link rel="stylesheet" href="{{ asset('css/location/region/index.css') }}"> --}}
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" defer></script>
    <script src="{{ asset('js/location/region/index.js') }}" defer></script>
@endsection

@section('content')
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('city-municipalities.create') }}"> + Add City/Municipality</a>
            <table class="table table-light table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Region</th>
                        <th scope="col">City/Municipality Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark table-striped">
                    @foreach ($citymuns as $citymun)
                        <tr>
                            <th scope='row'>{{ $citymun->region->name }}</th>
                            <td>{{ $citymun->type }}</td>
                            <td>{{ $citymun->latitude }}</td>
                            <td>{{ $citymun->longitude }}</td>
                            <td><a class="btn btn-secondary" href="{{ route('city-municipalities.edit', $citymun->id) }}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection