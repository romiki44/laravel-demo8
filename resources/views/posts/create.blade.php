@extends('layouts.app')

@section('title', 'Create the post')

@section('content')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    
    <div><input type="text" name="title" value="{{ old('title') }}"></div>
    @error('title')
        <div style="color: red">{{ $message }}</div>
    @enderror
    <div><textarea name="content">{{ old('content') }}</textarea></div>
    @error('content')
        <div style="color: red">{{ $message }}</div>
    @enderror

    <br />
    <div><input type="submit" value="create"></div>
</form>
@endsection