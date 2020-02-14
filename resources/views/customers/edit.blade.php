@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('customer.update', ['id' => $customer->id]) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <h1>Customer - Edit</h1>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $customer->name }}" placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="text" id="email" name="email" class="form-control  @error('email') is-invalid @enderror " value="{{ old('email') ?? $customer->email  }}" placeholder="E-mail">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') ?? $customer->phone  }}" placeholder="Phone">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-3 offset-9 d-flex">
                            <div class="pr-2">
                                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseDelete" aria-expanded="false" aria-controls="collapseDelete">Delete</button>
                            </div>
                            <div class="pr-2">
                                <a href="{{ route('customer.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                            <div class="">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Col-->
            </div> <!-- End Row-->
        </form>
        <div class="collapse" id="collapseDelete">
            <div class="row align-content-center pt-4">
                <div class="alert alert-danger col-12" role="alert">
                    <h4 class="alert-heading">Alert!</h4>
                    <p>You are deleting: {{ $customer->name }}. This operation <strong>cannot</strong> be undone.</p>
                    <p>Would you like to continue?</p>
                    <hr>
                    <div class="row">
                        <div class="col-3 offset-9 d-flex">
                            <div class="pr-2">
                                <button class="btn btn-outline-secondary"  data-toggle="collapse" data-target="#collapseDelete" aria-expanded="false" aria-controls="collapseDelete">Cancel</button>
                            </div>
                            <div class="">
                                <form action="{{ route('customer.destroy', ['id' => $customer->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
