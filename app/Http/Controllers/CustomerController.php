<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Invoicer\Domain\Entity\Customer;
use Illuminate\Support\Facades\Session;
use Invoicer\Domain\Repository\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function create()
    {
        return view('customer.modify');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->setName($request->name);
        $customer->setEmail($request->email);

        $this->customerRepository
             ->begin()
             ->persist($customer)
             ->commit();

        Session::flash('success', 'Customer Saved');
    }
}
