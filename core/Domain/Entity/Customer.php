<?php

declare(strict_types=1);

namespace Invoicer\Domain\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="customers")
 */
class Customer extends AbstractEntity
{
    /**
     * Customer full name
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $name;

    /**
     * Customer email address
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $email;

    /**
     * Get customer full name
     *
     * @return  string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set customer full name
     *
     * @param  string  $name  Customer full name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get customer email address
     *
     * @return  string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set customer email address
     *
     * @param  string  $email  Customer email address
     *
     * @return  self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}