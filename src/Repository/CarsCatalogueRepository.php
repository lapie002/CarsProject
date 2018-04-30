<?php

namespace App\Repository;

use App\Entity\CarsCatalogue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CarsCatalogue|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarsCatalogue|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarsCatalogue[]    findAll()
 * @method CarsCatalogue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarsCatalogueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CarsCatalogue::class);
    }

//    /**
//     * @return CarsCatalogue[] Returns an array of CarsCatalogue objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CarsCatalogue
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
