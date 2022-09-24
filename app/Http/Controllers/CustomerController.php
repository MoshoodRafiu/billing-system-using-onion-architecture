<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Invoicer\Domain\Repository\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    public function __construct(
        protected CustomerRepositoryInterface $customerRepository
    ) {

    }
}
