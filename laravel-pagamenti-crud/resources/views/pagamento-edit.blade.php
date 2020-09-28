@extends('layouts.main-layout')

@section('content')

<form action="{{route('pagamenti.update', $pagamento -> id)}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="status">STATUS</label>
            <input name ="status" type="text" value="{{  $pagamento -> status}}">
        </div>
        <div class="form-group">
            <label for="price">PRICE</label>
            <input name ="price" type="" value="{{  $pagamento -> price}}">
        </div>
        <button type="submit">INSERISCI</button>
</form>

@endsection
