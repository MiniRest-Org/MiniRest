@extends('admin.master')

@section('title')
Admin
@endsection

@section('header')
<h1>Olá, {{ $username }}!</h1>
@endsection

@section('content')
@if (!empty($items))
<ul>
    @foreach ($items as $key => $item)
    <li>{{ $key }} - {{ $item }} @if ($key % 2 == 0) - opa @endif</li>
    @endforeach
</ul>
@else
<p>No items found.</p>
@endif
@endsection