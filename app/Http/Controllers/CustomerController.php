<?php

namespace App\Http\Controllers;

use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request){
        return Customer::create($request->all());
    }
}
