@extends('layouts.nav')
@section('title', 'zeina')
@section('content')
<h1><a href="/">welcom in zeina</a></h1>

@for($i=0;$i<10;$i++)

{{$i}}
@endfor
<br>
{{-- {{$arr}} --}}
@foreach ($arr as $item)
    {{$item}}<br>
@endforeach
@endsection
