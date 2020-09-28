@extends('layouts.main-layout')

@section('content')
    <h1>Pagamenti</h1>
    <ul>
        @foreach ($pagamenti as $pagamento)
            <li>
                {{ $pagamento -> status}}
                {{ $pagamento -> price}}

                <a href="{{ route('pagamenti.destroy', $pagamento -> id )}}">X</a>
                <a href="{{ route('pagamenti.edit', $pagamento -> id )}}">E</a>

            </li>
        @endforeach
    </ul>

@endsection