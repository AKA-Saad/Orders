<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function firstCustomerWithHighestSpending()
    {

        $customer = Customer::with('payments')
            ->withSum('payments', 'amount')
            ->orderByDesc('payments_sum_amount')
            ->first();
        
        return $customer;
    }


    public function firstCustomerWithHighestNumberOfOrders()
    {
        $customer = Customer::withCount('orders')
            ->orderByDesc('orders_count')
            ->first();
        
        return $customer;
    }

}
