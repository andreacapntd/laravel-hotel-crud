@extends('layouts.main_layout')

@section('content')

 <span> Floor: {{ $stanza -> floor}}</span>

 <br>

 <span> Beds: {{ $stanza -> beds}}</span>

 <br>

 <a href="{{ route('stanza-index', $stanza -> id) }}">Home</a>

@endsection
