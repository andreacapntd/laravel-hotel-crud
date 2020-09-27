@extends('layouts.main_layout')

@section('content')

    <h1>NEW STANZA</h1>

    <form action="{{ route('stanza_store') }}" method="post">

      @csrf
      @method('POST')

      <div class="form-group">

        <label for="room_number">ROOM NUMBER</label>
        <br>
        <input type="text" name="room_number" value="">

      </div>

      <div class="form-group">

        <label for="floor">Floor</label>
        <br>
        <input type="text" name="floor" value="">

      </div>

      <div class="form-group">

        <label for="beds">Beds</label>
        <br>
        <input type="text" name="beds" value="">

      </div>

      <button type="submit">CREATE NEW STANZA</button>
    </form>
@endsection
