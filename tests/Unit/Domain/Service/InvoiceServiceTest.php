<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Service;

use Invoicer\Domain\Entity\Invoice;
use PHPUnit\Framework\TestCase;
use Invoicer\Domain\Entity\Order;
use Invoicer\Domain\Factory\InvoiceFactory;
use Invoicer\Domain\Repository\OrderRepositoryInterface;
use Invoicer\Domain\Service\InvoiceService;

class InvoiceServiceTest extends TestCase
{
     /**
     * @test
     *
     * @return voidß
     */
    public function it_should_return_an_invoice_for_uninvoiced_orders(): void
    {
        $orders = [(new Order())->setTotal(500)];
        $invoice = [(new Invoice())->setTotal(500)];

        $orderRepository = $this->createStub(OrderRepositoryInterface::class);
        $orderRepository->method('getUnInvoicedOrders')
                        ->willReturn($orders);

        $invoiceFactory = $this->createStub(InvoiceFactory::class);
        $invoiceFactory->method('createFromOrder')
                       ->willReturn($invoice[0]);

        $service = new InvoiceService($orderRepository, $invoiceFactory);

        $results = $service->generateInvoices();

        $this->assertIsArray($results);
        $this->assertEquals(count($orders), count($results));
    }
}