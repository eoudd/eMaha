@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('content')
    <h5>Welcome, {{ Auth::user()->nama ?? '' }}</h5>
    <p>Annyeong!</p>
@endsection