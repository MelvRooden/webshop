@extends('layout.app')

@section('title', 'Shop')
@section('headTitle', 'Shop')


@section('content')

@foreach($categories as $category)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('categoryShow', ['id' => $category->id]) }}">{{ $category->name }}</a>
                </h4>
                <h5>{{ $category->details }}</h5>
            </div>
        </div>
    </div>
@endforeach

@endsection