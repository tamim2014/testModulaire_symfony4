<?php

namespace App\Repository;

use App\Entity\TestSaisie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestSaisie|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestSaisie|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestSaisie[]    findAll()
 * @method TestSaisie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestSaisieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestSaisie::class);
    }

    // /**
    //  * @return TestSaisie[] Returns an array of TestSaisie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestSaisie
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
