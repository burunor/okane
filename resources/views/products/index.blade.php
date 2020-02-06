@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-content-between align-items-center">
            <div class="col-9">
                <h1>Products - Index</h1>
            </div>
            <div class="col-2 offset-1">
                <a href="/products/create" class="btn btn-primary">Add Product</a>
            </div>
        </div>
        @foreach($products as $product)
            <div class="row">
                {{ $product->name }}
            </div>
        @endforeach
    </div>
@endsection
