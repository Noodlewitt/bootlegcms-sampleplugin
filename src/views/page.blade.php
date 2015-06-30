@extends('coolaccidents::layout')


@section('main-header')
    <title>{{$post->name}}: Cool Accidents</title>
    <meta name="description" content="{{$post->excerpt}}">
    <meta name="keywords" content="{{$post->singletags}}">
    <meta name="author" content="{{$post->author->username}}">
@stop

@section('main-content')
    <h1>{{$content->name}}</h1>
@stop