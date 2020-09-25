@extends('layouts.main-layout')ù
@section('content')

<h1>NEW OSPITE</h1>
<form action="{{ route('ospite-store}}">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="name">NAME</label>
        <br>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="lastname">LASTNAME</label>
        <br>
        <input type="text" name="lastname">
    </div>
    <div class="form-group">
        <label for="date_of_birth">DATE OF BIRTH</label>
        <br>
        <input type="DATA" name="date_of_birth">
    </div>
    <div class="form-group">
        <label for="document_type">DOCUMENT TYPE</label>
        <br>
        <input type="text" name="document_type">
    </div>
    <div class="form-group">
        <label for="document_number">DOCUMENT NUMBER</label>
        <br>
        <input type="text" name="document_number">
    </div>




</form> 