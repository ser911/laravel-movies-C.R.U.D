@extends('layouts.base')

@section('pageTitle')
    {{$film->Title}}
@endsection

@section('content')

<p>{{$film->plot}}</p>

<a href="{{route('films.index')}}">Back to database</a>
@endsection