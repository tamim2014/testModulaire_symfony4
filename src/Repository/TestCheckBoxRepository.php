<?php

namespace App\Repository;

use App\Entity\TestCheckBox;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestCheckBox|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestCheckBox|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestCheckBox[]    findAll()
 * @method TestCheckBox[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestCheckBoxRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestCheckBox::class);
    }

    // /**
    //  * @return TestCheckBox[] Returns an array of TestCheckBox objects
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
    public function findOneBySomeField($value): ?TestCheckBox
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
