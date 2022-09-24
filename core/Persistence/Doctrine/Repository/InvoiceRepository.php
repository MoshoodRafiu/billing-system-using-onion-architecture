<?php

declare(strict_types=1);

namespace Invoicer\Persistence\Doctrine\Repository;

use Invoicer\Domain\Entity\Invoice;
use Invoicer\Domain\Repository\InvoiceRepositoryInterface;

class InvoiceRepository extends AbstractDoctrineRepository implements InvoiceRepositoryInterface
{
    /**
     * @var string
     */
    protected string $entityClass = Invoice::class;
}