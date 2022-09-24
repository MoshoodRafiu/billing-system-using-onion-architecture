<?php

declare(strict_types=1);

namespace CleanPHP\Domain\Entity;

abstract class AbstractEntity
{
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