@extends('template.template')
@section('content')
@php
    $name = $post->user->username ;
    $userpost = explode(" ", $name);
    $nameuserpost = $userpost[0];
@endphp

    <h1 class="text-center h1-post-id">منشور ل {{$nameuserpost}}</h1>
    <x-posts.post :post="$post"></x-posts.post>
@endsection


