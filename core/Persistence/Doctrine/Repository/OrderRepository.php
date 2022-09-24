<?php

declare(strict_types=1);

namespace Invoicer\Persistence\Doctrine\Repository;

use Doctrine\ORM\Query\Expr\Join;
use Invoicer\Domain\Entity\Order;
use Invoicer\Domain\Repository\OrderRepositoryInterface;

class OrderRepository extends AbstractDoctrineRepository implements OrderRepositoryInterface
{
    /**
     * @var string
     */
    protected string $entityClass = Order::class;

    public function getUnInvoicedOrders(): array
    {
        $builder = $this->entityManager->createQueryBuilder()
            ->select('o')
            ->from($this->entityClass, 'o')
            ->leftJoin(
                'CleanPhp\Invoicer\Domain\Entity\Invoice',
                'i',
                Join::WITH,
                'i.order = o'
            )
            ->where('i.id IS NULL');

        return $builder->getQuery()->getResult();
    }
}