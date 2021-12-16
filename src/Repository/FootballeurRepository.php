<?php

namespace App\Repository;

use App\Entity\Footballeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Footballeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Footballeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Footballeur[]    findAll()
 * @method Footballeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootballeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Footballeur::class);
    }

    // /**
    //  * @return Footballeur[] Returns an array of Footballeur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Footballeur
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
