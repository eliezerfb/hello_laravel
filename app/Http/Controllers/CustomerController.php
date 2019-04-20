<?php

namespace App\Http\Controllers;

use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request){
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->save();
        // return $result;
    }
}
