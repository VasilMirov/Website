@extends('layouts.app')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

@section('content')
    <h1>Home</h1>
    <p>something something</p>
    @endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
