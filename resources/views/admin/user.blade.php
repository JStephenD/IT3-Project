@extends('layouts.app')

@section('content')
<div class="container dark:bg-gray-900">
    <div class="p-5 row justify-content-between">
        <div class="col-4 d-flex flex-column align-items-center justify-content-around">
            <img style="height: 350px; width: 350px;" src="https://images.unsplash.com/photo-1569007889977-42e2392850d7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
            <span>{{ $user->name }}</span>
            <span>{{ $user->email }}</span>
        </div>
        <div class="col-8 p-5 d-flex flex-column">
            <span>Set Permissions:  {{ $user->permissions }}</span>
            <span>Created At: {{ $user->created_at }}</span>
        </div>
    </div>
</div>
@endsection