@extends('layouts.app')

@section('title', 'Hello')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')
    <p>This is my body content.</p>

    <example></example>



@endsection

