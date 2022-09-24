<?php

declare(strict_types=1);

namespace Invoicer\Domain\Factory;

use DateTime;
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
                ->setInvoiceDate(new DateTime())
                ->setTotal($order->getTotal());
        return $invoice;
    }
}