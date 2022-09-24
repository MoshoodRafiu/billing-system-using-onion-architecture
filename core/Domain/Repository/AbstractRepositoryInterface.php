<?php

declare(strict_types=1);

namespace Invoicer\Domain\Repository;

use Invoicer\Domain\Entity\AbstractEntity;

interface AbstractRepositoryInterface
{
    /**
     * Get's entity by id
     *
     * @param int $id
     */
    public function getById(int $id);

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