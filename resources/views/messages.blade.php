@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
        <ul class="list-group p-2">
            <li class="list-group-item ">{{ $messages->name }}</li>
            <li class="list-group-item ">{{ $messages->email }}</li>
            <li class="list-group-item ">{{ $messages->subject }}</li>
            <li class="list-group-item ">{{ $messages->message }}</li>
        </ul>
    @endforeach
@endsection
