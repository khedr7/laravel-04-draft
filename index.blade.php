@extends('layouts.app')

@section('title', '- All messages')

@section('content')
    <h3>My messages</h3>
    <h6><a href="contact">Add new message</a></h6>
    @foreach ($messages as $message)
        <div>
            Message from:
            <a href="{{ route('messages.show', $message) }}">
                <h4> {{ $message->fname }} {{$message->lname}}</h4>
            </a>
        </div>
    @endforeach
@endsection
