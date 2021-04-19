<?php

namespace App\Repository;

use App\Entity\SummerList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SummerList|null find($id, $lockMode = null, $lockVersion = null)
 * @method SummerList|null findOneBy(array $criteria, array $orderBy = null)
 * @method SummerList[]    findAll()
 * @method SummerList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SummerListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SummerList::class);
    }

    // /**
    //  * @return SummerList[] Returns an array of SummerList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SummerList
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
