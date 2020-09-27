@extends('layouts.main_layout')

@section('content')

  <h1> STANZE </h1>

  <ul>

    @foreach ($stanze as $stanza)

      <li>

        <a href="{{ route('stanza_show', $stanza -> id) }}">

         {{$stanza -> room_number}}

        </a>

      </li>

    @endforeach

  </ul>

  <a href="{{ route('stanza_create')}}">CREATE NEW STANZA</a>

@endsection
