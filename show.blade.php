@extends('layouts.app')

@section('title', '- Home Page')

@section('content')
    <h3>{{ $message->fname }} {{ $message->name }}</h3>
    email : {{$message->email}} <br>
    contact : {{$message->content}} <br>
    <h6><a href="{{ route('messages.edit', $message) }}">edit</a></h6>
    <h6>
        <form action="{{ route('messages.destroy', $message) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </h6>
    <hr>
@endsection
