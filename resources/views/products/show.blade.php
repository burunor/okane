@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>Products - Show</h1>
            </div>
            <div class="col-2 offset-1">
                <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit Product</a>
            </div>
        </div>
        <div class="d-flex pt-4">
            <div class="col-9 pl-0">
                <div><h2>{{ $product->name }}</h2></div>
                <div>{{ $product->description }}</div>
                <div>{{ $product->barcode }}</div>
                <div>{{ $product->quantity }}</div>
                <div>{{ $product->cost_price }}</div>
                <div>{{ $product->sell_price }}</div>
            </div>
            <div class="pr-0">
                <div><img class="w-75" src="{{ $product->profileImage() }}" alt=""></div>
            </div>
        </div>
    </div>
@endsection
