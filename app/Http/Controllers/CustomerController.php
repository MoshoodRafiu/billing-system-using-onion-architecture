<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Session;
use Invoicer\Domain\Service\CustomerService;
use Invoicer\Domain\Repository\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository,
        protected CustomerService $customerService
    ) {
    }

    public function create()
    {
        return view('customer.modify');
    }

    public function store(CustomerRequest $request)
    {
        $this->customerService->persistCustomer($request);
        Session::flash('success', 'Customer Saved');
        return redirect('/customers');
    }
}
