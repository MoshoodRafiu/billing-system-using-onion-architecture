<?php

declare(strict_types=1);

namespace Invoicer\Domain\Repository;

use Invoicer\Domain\Entity\AbstractEntity;

interface InvoiceRepositoryInterface extends AbstractEntity
{
    /**
     * Get all orders without invoice
     *
     * @return void
     */
    public function getUnInvoicedOrders();
}