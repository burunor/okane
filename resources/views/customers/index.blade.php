@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-content-between align-items-center">
            <div class="col-10">
                <h1>Customer - Index</h1>
            </div>
            <div class="col-2">
                <a href="{{ route('customer.create')  }}" class="btn btn-primary">Add Customer</a>
            </div>
        </div>

        <div class="table-responsive pt-4">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td><a href="{{ route('customer.edit', ['id' => $customer->id]) }}">{{ $customer->name }}</a></td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
