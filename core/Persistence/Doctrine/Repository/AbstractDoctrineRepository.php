<?php

declare(strict_types=1);

namespace Invoicer\Persistence\Doctrine\Repository;

use Doctrine\ORM\EntityManager;
use Invoicer\Domain\Entity\AbstractEntity;
use Invoicer\Domain\Repository\AbstractRepositoryInterface;

abstract class AbstractDoctrineRepository implements AbstractRepositoryInterface
{
    /**
     * @var string
     */
    protected string $entityClass;

    /**
     * @param EntityManager $em
     */
    public function __construct(protected EntityManager $entityManager)
    {
        if (empty($this->entityClass)) {
            throw new \RuntimeException(
                get_class($this) . '::$entityClass is not defined'
            );
        }
    }

    /**
     * @param int $id
     * @return object
     */
    public function getById(int $id): ?object
    {
        return $this->entityManager->find($this->entityClass, $id);
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->entityManager
                    ->getRepository($this->entityClass)
                    ->findAll();
    }

    /**
     * @param array $conditions
     * @param array $order
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getBy(
        $conditions = [],
        $order = [],
        $limit = null,
        $offset = null
    ): array
    {
        $repository = $this->entityManager->getRepository(
            $this->entityClass
        );

        $results = $repository->findBy(
            $conditions,
            $order,
            $limit,
            $offset
        );

        return $results;
    }

    /**
     * @param AbstractEntity $entity
     * @return $this
     */
    public function persist(AbstractEntity $entity)
    {
        $this->entityManager->persist($entity);
        return $this;
    }

    /**
     * @return $this
     */
    public function begin()
    {
        $this->entityManager->beginTransaction();
        return $this;
    }

    /**
     * @return $this
     */
    public function commit()
    {
        $this->entityManager->flush();
        $this->entityManager->commit();
        return $this;
    }
}