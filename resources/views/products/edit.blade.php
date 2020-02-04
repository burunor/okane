@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/products" method="post">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Products - Edit</h1>
                    </div>

                    <div class="form-group row">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group row">
                        <label for="description">Description</label>
                        <input type="text" id="description" class="form-control" placeholder="Description">
                    </div>

                    <div class="form-group row">
                        <label for="barcode">Barcode</label>
                        <input type="text" id="barcode" class="form-control" placeholder="Barcode">
                    </div>

                    <div class="form-group row">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" class="form-control" placeholder="">
                    </div>

                    <div class="form-group row">
                        <label for="cost-price">Cost Price</label>
                        <input type="number" id="cost-price" class="form-control" placeholder="">
                    </div>

                    <div class="form-group row">
                        <label for="sell-price">Sell Price</label>
                        <input type="number" id="sell-price" class="form-control" placeholder="">
                    </div>

                    <div class="row">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div> <!-- End Col-->
            </div> <!-- End Row-->
        </form>
    </div>
@endsection

