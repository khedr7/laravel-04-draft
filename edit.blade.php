@extends('layouts.app')

@section('title', '- edit: ' . $message->name)

@section('content')
    <h2>edit message</h2>
    <form action="{{ route('messages.update', $message) }}}}" method="POST">
        @method('PUT')
        @csrf
        <label>
           First Name
            <input type="text" name="fname" value="{{ $message->fname }}">
        </label><br>
        <label>
           last Name
            <input type="text" name="lname" value="{{ $message->lname }}">
        </label><br>
        <label>
           Email
            <input type="email" name="email" value="{{ $message->email }}">
        </label><br>
        <label for="">Content : </label> <br>
        <textarea name="content" cols="30" rows="10" value ="{{$message->content}}"></textarea> <br>
        <input type="submit" value="Send">
    </form>
@endsection
