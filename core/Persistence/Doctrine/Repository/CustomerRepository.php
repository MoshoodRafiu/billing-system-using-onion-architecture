<?php

declare(strict_types=1);

namespace Invoicer\Persistence\Doctrine\Repository;

use Invoicer\Domain\Entity\Customer;
use Invoicer\Domain\Repository\CustomerRepositoryInterface;

class CustomerRepository extends AbstractDoctrineRepository implements CustomerRepositoryInterface
{
    /**
     * @var string
     */
    protected string $entityClass = Customer::class;
}