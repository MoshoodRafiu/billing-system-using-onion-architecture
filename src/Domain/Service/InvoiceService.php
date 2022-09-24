<?php

declare(strict_types=1);

namespace Invoicer\Domain\Service;

use Invoicer\Domain\Factory\InvoiceFactory;
use Invoicer\Domain\Repository\OrderRepositoryInterface;

class InvoiceService
{
    public function __construct(
        protected OrderRepositoryInterface $orderRepository,
        protected InvoiceFactory $invoiceFactory
    ) {
    }

    public function generateInvoices()
    {
        $orders = $this->orderRepository->getUnInvoicedOrders();

        $invoices = [];

        foreach ($orders as $order) {
            $invoices[] = $this->invoiceFactory->createFromOrder($order);
        }

        return $invoices;
    }
}