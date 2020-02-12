@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Products - Create</h1>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-form-label">Description</label>
                        <input type="text" id="description" name="description" class="form-control  @error('description') is-invalid @enderror " value="{{ old('description') }}" placeholder="Description">

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="barcode" class="col-form-label">Barcode</label>
                        <input type="text" id="barcode" name="barcode" class="form-control @error('barcode') is-invalid @enderror" value="{{ old('barcode') }}" placeholder="Barcode">

                        @error('barcode')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">

                        <div class="form-group col-4 pl-0">
                            <label for="quantity" class="col-form-label">Quantity</label>
                            <input type="number" id="quantity" name="quantity" class="form-control  @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}" placeholder="">

                            @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-4 pl-0">
                            <label for="cost-price" class="col-form-label">Cost Price</label>
                            <input type="number" id="cost-price" name="cost_price" class="form-control  @error('cost_price') is-invalid @enderror" value="{{ old('cost_price') }}" placeholder="">

                            @error('cost_price')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-4 p-0">
                            <label for="sell-price" class="col-form-label">Sell Price</label>
                            <input type="number" id="sell-price" name="sell_price" class="form-control  @error('sellprice') is-invalid @enderror" value="{{ old('sell_price') }}" placeholder="">

                            @error('sell_price')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label">Post Image</label>

                        <input type="file" class="form-control-file  @error('image') is-invalid @enderror" value="{{ old('image') }}" id="image" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-3 offset-9 d-flex">
                            <div class="pr-2">
                                <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                            <div class="">
                                <button class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Col-->
            </div> <!-- End Row-->
        </form>
    </div>
@endsection
