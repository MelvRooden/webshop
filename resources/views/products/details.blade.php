@extends('layouts.app')

@section('title', 'Shop')
@section('headTitle', 'Shop')

@section('content')

    {{ $product->name }}
    {{ $product->price }}
    {{ $product->details }}

@endsection