@extends('layouts.main-layout')
@section('content')

  <h1>
    {{ $emp -> firstname }}
    {{ $emp -> lastname }}:
  </h1>

  <br><br>

  <ul>
    <li>
      Date of birth: {{ $emp -> date_of_birth }}
    </li>
    <li>
      Private code: {{ $emp -> private_code }}
    </li>
    <li>
      Location: {{ $emp -> location -> name }}
      ({{ $emp -> location -> city }} -
        {{ $emp -> location -> state }})
    </li>
    <li>
      Tasks:
      <ul>
        @foreach ($emp -> tasks as $tas)
          <li>
            {{ $tas -> name }}:
            {{ $tas -> start_date }} -
            {{ $tas -> end_date }}
          </li>
        @endforeach
      </ul>
    </li>
    <li>
      <a href="{{ route('emp.edit', $emp -> id) }}">EDIT</a><br>
      <a href="{{ route('emp.destroy', $emp -> id) }}">DELETE</a>
    </li>
  </ul>

@endsection
