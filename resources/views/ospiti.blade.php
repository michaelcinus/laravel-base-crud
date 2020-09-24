@extends('layouts.main-layout')
@section('content')

    <h1>OSPITI</h1>
    <ul>
    @foreach ($ospiti as $ospite)
        <li>
            {{ $ospite -> name }}
            {{ $ospite -> lastname }}
        </li>
    @endforeach    
    </ul>

@endsection