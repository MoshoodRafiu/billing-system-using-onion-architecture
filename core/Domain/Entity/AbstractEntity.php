<?php

declare(strict_types=1);

namespace Invoicer\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class AbstractEntity
{
    /**
     * Entity id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    protected int $id;

    /**
     * Gets the entity id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets the entity id
     *
     * @param integer $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}