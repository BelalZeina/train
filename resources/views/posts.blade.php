<!-- resources/views/child.blade.php -->
{{-- extend form layouts  page navbar (nav.balde.php) --}}
@extends('layouts.nav')
{{-- section with parametr and without endsection of @yield()  form layouts  page navbar (nav.balde.php) --}}
{{-- @section('title', 'posts') --}}
{{-- section with endsection  form layouts  page navbar (nav.balde.php) --}}
{{-- @section('sidebar') --}}
{{-- content the section --}}
{{-- @parent --}}
{{-- parent to show the section sidebar in this page --}}
{{-- <p>This is appended to the master sidebar.</p>
@endsection --}}

{{-- section to exchange the parametr form layouts  page navbar (nav.balde.php) --}}
@section('content')
    <p>This is my body content.</p>
@endsection
{{-- posts page => --}}
{{-- @foreach ($data as $value)
{{$value}}
@endforeach --}}




