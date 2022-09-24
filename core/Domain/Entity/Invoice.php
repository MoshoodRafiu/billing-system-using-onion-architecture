<?php

declare(strict_types=1);

namespace Invoicer\Domain\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoices")
 */
class Invoice extends AbstractEntity
{
    /**
     * invoice order
     * @ORM\ManyToOne(targetEntity="Order", mappedBy="invoices", cascade={"persist"})
     * @var Order
     */
    protected Order $order;

    /**
     * Date invoice was generated
     * @ORM\Column(type="timestamp")
     * @var DateTime
     */
    protected DateTime $invoiceDate;

    /**
     * Total amount
     * @ORM\Column(type="decimal", precision="10", scale="2")
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
        return $this->invoiceDate;
    }

    /**
     * Set date invoice was generated
     *
     * @param  DateTime  $invoiceDate  Date invoice was generated
     *
     * @return  self
     */
    public function setInvoiceDate(DateTime $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
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