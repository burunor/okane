@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-content-between align-items-center">
            <div class="col-9">
                <h1>Products - Index</h1>
            </div>
            <div class="col-2 offset-1">
                <a href="{{ route('product.create')  }}" class="btn btn-primary">Add Product</a>
            </div>
        </div>

        <div class="table-responsive pt-4">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Cost Price</th>
                    <th>Sell Price</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><a href="{{ route('product.show', [ 'id' => $product->id]) }}">{{ $product->name }}</a></td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->cost_price }}</td>
                            <td>{{ $product->sell_price }}</td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
@endsection
