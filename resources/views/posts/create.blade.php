@extends('layouts.app')

@section('title', 'Create the post')

@section('content')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.partials.form')
    <br />
    <div><input type="submit" value="create"></div>
</form>
@endsection