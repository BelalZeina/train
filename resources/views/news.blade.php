@extends('layouts.nav')
@section('title', 'home')
@section("content")
name :{{$obj->name}} <br>
id :{{$obj->id}} <br>
gender :{{$obj->gender}}
@endsection
