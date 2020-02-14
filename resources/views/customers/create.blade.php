@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('customer.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <h1>Customer - Create</h1>
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
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="text" id="email" name="email" class="form-control  @error('email') is-invalid @enderror " value="{{ old('email') }}" placeholder="E-mail">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-3 offset-9 d-flex">
                            <div class="pr-2">
                                <a href="{{ route('customer.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                            <div class="">
                                <button class="btn btn-primary" type="submit">Create</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Col-->
            </div> <!-- End Row-->
        </form>
    </div>
@endsection
