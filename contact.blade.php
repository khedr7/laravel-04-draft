@extends('layouts.app')

@section('title', '- Contact Me')

@section('content')
    <fieldset>
        <legend><h2>Contact me</h2></legend>
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <label for="">first name : </label>
            <input type="text" name="fname"> <br>
            <label for="">Last name : </label>
            <input type="text" name="lname"> <br>
            <label for="">Email : </label>
            <input type="text" name="email"> <br>
            <label for="">Content : </label> <br>
            <textarea name="content" cols="30" rows="10"></textarea> <br>
            <input type="submit" value="Send">
        </form>
    </fieldset>
@endsection
