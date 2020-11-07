<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customer = Customer::query();
        if ($request->has('name'))
            $customer->where('customer_name', 'like', "%$request->name%")->get();

        return $customer->get();
    }
}
