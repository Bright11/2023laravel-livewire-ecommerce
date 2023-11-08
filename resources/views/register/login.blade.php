@extends('frontend.layouts.header')

@section('content')
<form action="{{ route("register") }}" method="post" class="registerform">
    @csrf
    <input type="text" name="username">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button>Save</button>
    <p onclick="login()">Don't have an account? Register</p>
</form>

@endsection
