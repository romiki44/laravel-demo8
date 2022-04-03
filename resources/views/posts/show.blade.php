@extends('layouts.app')

@section('title', $post['title'])

@section('content') 

@if($post['is_new'])
<div>A new blog post!</div>
@else
<div>This is a old post...</div>
@endif

@unless($post['is_new'])
<div>It si an old post using unless</div>
@endunless

@isset($post['has_comments'])
    <div>This post has comments...</div>
@endisset

<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>
@endsection