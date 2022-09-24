<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Service;

use DateTime;
use Invoicer\Domain\Entity\Invoice;
use Invoicer\Domain\Entity\Order;
use Invoicer\Domain\Factory\InvoiceFactory;
use PHPUnit\Framework\TestCase;

class InvoiceFactoryTest extends TestCase
{
    protected Order $order;

    protected Invoice $invoice;

    public function setUp(): void
    {
        $order = new Order();
        $order->setTotal(500);
        $order->setTotal(500);
        $factory = new InvoiceFactory();
        $invoice = $factory->createFromOrder($order);
        $this->order = $order;
        $this->invoice = $invoice;
    }

    /**
     * @test
     *
     * @return void
     */
    public function it_returns_an_instance_of_invoice(): void
    {
        $this->assertInstanceOf(Invoice::class, $this->invoice);
    }

    /**
     * @test
     *
     * @return void
     */
    public function it_sets_total_to_same_as_order(): void
    {
        $this->assertEquals($this->order->getTotal(), $this->invoice->getTotal());
    }

    /**
     * @test
     *
     * @return void
     */
    public function it_sets_the_invoice_order_to_specified_order(): void
    {
        $this->assertEquals($this->order, $this->invoice->getOrder());
    }

    /**
     * @test
     *
     * @return void
     */
    public function it_sets_the_correct_invoice_date(): void
    {
        $this->assertEqualsWithDelta(new DateTime(), $this->invoice->getInvoiceDate(), 1);
    }
}