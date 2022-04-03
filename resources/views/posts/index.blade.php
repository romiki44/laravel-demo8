@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content') 
    {{-- @foreach ($posts as $key=>$post) 
        <div>{{ $key }}. {{ $post['title'] }}</div>
    @endforeach --}}
    @forelse ($posts as $key=>$post) 
        @include('posts.partials.post')
    @empty
        No post found!
    @endforelse
@endsection