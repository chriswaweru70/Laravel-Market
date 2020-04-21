<!Doctype html>
@extends('layouts.app')
@section('main')

<form action="{{ route('markets.store') }}" methods="post">
    {{ csrf_field()}}
    <label for="name">Market Name</label>
    <input type="text" name="name">
    <label for="city">Market City</label>
    <input type="text" name="city">
    <label for="website">Market Website</label>
    <input type="text" name="website">
    <button type="submit">Create</button>
</form>

@endsection