@extends('layouts.main-layout')
@section('content')

  <form action="" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
        <label for="firstname">FIRSTNAME</label><br>
        <input type="text" name="firstname" value="{{ $emp -> firstname }}">
    </div>
    <div class="form-group">
        <label for="lastname">LASTNAME</label><br>
        <input type="text" name="lastname" value="{{ $emp -> lastname }}">
    </div>
    <div class="form-group">
        <label for="date_of_birth">DATE OF BIRTH</label><br>
        <input type="date" name="date_of_birth" value="{{ $emp -> date_of_birth }}">
    </div>
    <div class="form-group">
        <label for="private_code">PRIVATE CODE</label><br>
        <input type="text" name="private_code" value="{{ $emp -> private_code }}">
    </div>
    <div class="form-group">
        <label for="location_id">LOCATION</label><br>
        <select name="location_id">
          @foreach ($locs as $loc)
            <option value="{{ $loc -> id }}"

              @if ($loc -> id === $emp -> location -> id)
                selected
              @endif

              >{{ $loc -> name }} ({{ $loc -> state }})</option>
          @endforeach
        </select>
    </div>

    <br><br>

    <button type="submit" name="button">SAVE</button>

  </form>

@endsection
