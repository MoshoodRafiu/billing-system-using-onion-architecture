<?php

declare(strict_types=1);

namespace Invoicer\Domain\Service;

use Illuminate\Http\Request;
use Invoicer\Domain\Entity\Customer;
use Invoicer\Domain\Repository\CustomerRepositoryInterface;

class CustomerService
{
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function persistCustomer(Request $request): Customer
    {
        $customer = new Customer();
        $customer->setName($request->name);
        $customer->setEmail($request->email);

        $this->customerRepository
             ->begin()
             ->persist($customer)
             ->commit();

        return $customer;
    }
}