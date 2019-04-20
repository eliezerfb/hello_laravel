<?php

namespace App\Http\Controllers;

use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request){
        return Customer::create($request->all());
    }

    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return $customer;
    }

    public function getCustomerByID($id){
        return Customer::find($id);
    }

    public function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
    }
}