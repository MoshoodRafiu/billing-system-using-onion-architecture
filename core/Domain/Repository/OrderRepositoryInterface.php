<?php

declare(strict_types=1);

namespace Invoicer\Domain\Repository;

use Invoicer\Domain\Entity\AbstractEntity;

interface OrderRepositoryInterface extends AbstractRepositoryInterface
{
    /**
     * Get all orders without invoice
     *
     * @return iterable
     */
    public function getUnInvoicedOrders(): array;
}