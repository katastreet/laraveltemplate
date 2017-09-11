@extends('layouts.app')
@section('title','home')
@section('content')
<h1>Home</h1>
@endsection
@section('sidebar')
    @parent
    <p> Appended to sidebar</p>

@endsection
