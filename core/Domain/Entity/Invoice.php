<?php

declare(strict_types=1);

namespace Invoicer\Domain\Entity;

use DateTime;

class Invoice extends AbstractEntity
{
    /**
     * invoice order
     *
     * @var Order
     */
    protected Order $order;

    /**
     * Date invoice was generated
     *
     * @var DateTime
     */
    protected DateTime $InvoiceDate;

    /**
     * Total amount
     *
     * @var float
     */
    protected float $total;

    /**
     * Get invoice order
     *
     * @return  Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * Set invoice order
     *
     * @param  Order  $order  invoice order
     *
     * @return  self
     */
    public function setOrder(Order $order): self
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Get date invoice was generated
     *
     * @return  DateTime
     */
    public function getInvoiceDate(): DateTime
    {
        return $this->InvoiceDate;
    }

    /**
     * Set date invoice was generated
     *
     * @param  DateTime  $InvoiceDate  Date invoice was generated
     *
     * @return  self
     */
    public function setInvoiceDate(DateTime $InvoiceDate): self
    {
        $this->InvoiceDate = $InvoiceDate;
        return $this;
    }

    /**
     * Get total amount
     *
     * @return  float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * Set total amount
     *
     * @param  float  $total  Total amount
     *
     * @return  self
     */
    public function setTotal(float $total): self
    {
        $this->total = $total;
        return $this;
    }
}