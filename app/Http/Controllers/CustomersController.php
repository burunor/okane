<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'DESC')->get();;
        return view('customers.index', compact('customers') );
    }
    public function create()
    {

        return view('customers.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'numeric',
        ]);

        Customer::create($data);

        return redirect()->route('customer.index');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'numeric'
        ]);
        $customer = Customer::findOrFail($id);

        $customer->update($data);

        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
