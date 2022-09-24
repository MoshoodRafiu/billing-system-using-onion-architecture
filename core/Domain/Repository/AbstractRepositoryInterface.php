<?php

declare(strict_types=1);

namespace Invoicer\Domain\Repository;

use Invoicer\Domain\Entity\AbstractEntity;

interface AbstractRepositoryInterface
{
    /**
     * Get's entity by id
     *
     * @param string $id
     */
    public function getById(string $id);

    /**
     * Gets all entity
     *
     */
    public function getAll();

    /**
     * Saves an entity
     *
     * @param AbstractEntity $entity
     */
    public function persist(AbstractEntity $entity);

    /**
     * Begins a transaction
     *
     */
    public function begin();

    /**
     * Commits a transaction
     *
     */
    public function commit();
}