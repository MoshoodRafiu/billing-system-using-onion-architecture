<?php

declare(strict_types=1);

namespace Invoicer\Domain\Factory;

use Invoicer\Domain\Entity\Invoice;
use Invoicer\Domain\Entity\Order;

class InvoiceFactory
{
    /**
     * Creates a new invoice from an order
     *
     * @param Order $order
     * @return Invoice
     */
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();
        $invoice->setOrder($order)
                ->setTotal($order->getTotal());
        return $invoice;
    }
}