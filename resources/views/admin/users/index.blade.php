
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @foreach ($users as $user)
            <small>{{$user->id}}</small>
            <small>{{$user->name}}</small>
            <small>{{$user->email}}></small>
            @endforeach
        </div>
    </div>
</div>
@endsection
