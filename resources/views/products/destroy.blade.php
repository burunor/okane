@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>Products - Delete</h1>
            </div>
        </div>
        <div class="row align-content-center">
            <div class="alert alert-danger col-9" role="alert">
                <h4 class="alert-heading">Alert!</h4>
                <p>You are deleting: {{ $product->name }}. This operation <strong>cannot</strong> be undone.</p>
                <p>Would you like to continue?</p>
                <hr>
                <div class="row">
                    <div class="col-3 offset-9 d-flex">
                        <div class="pr-2">
                            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                        <div class="">
                            <form action="{{ route('product.destroy', ['id' => $product->id, 'confirmed' => true])  }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
