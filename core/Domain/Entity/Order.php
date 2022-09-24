<?php

declare(strict_types=1);

namespace Invoicer\Domain\Entity;

use Dictrine\ORM\Mapping as ORM;

class Order extends AbstractEntity
{
    /**
     * Order customer
     * @ORM\ManyToOne(targetEntity="Customer", mappedBy="orders", cascade={"persist"})
     * @var Customer
     */
    protected Customer $customer;

    /**
     * Order Number
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $orderNumber;

    /**
     * Order description
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $description;

    /**
     * Total amount of order
     * @ORM\Column(type="decimal", precision="10", scale="2")
     * @var float
     */
    protected float $total;

    /**
     * Get order customer
     *
     * @return  Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * Set order customer
     *
     * @param  Customer  $customer  Order customer
     *
     * @return  self
     */
    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get order Number
     *
     * @return  string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * Set order Number
     *
     * @param  string  $orderNumber  Order Number
     *
     * @return  self
     */
    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * Get order description
     *
     * @return  string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set order description
     *
     * @param  string  $description  Order description
     *
     * @return  self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get total amount of order
     *
     * @return  float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * Set total amount of order
     *
     * @param  float  $total  Total amount of order
     *
     * @return  self
     */
    public function setTotal(float $total): self
    {
        $this->total = $total;
        return $this;
    }
}