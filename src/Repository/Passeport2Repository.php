<?php

namespace App\Repository;

use App\Entity\Passeport2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Passeport2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Passeport2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Passeport2[]    findAll()
 * @method Passeport2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Passeport2Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Passeport2::class);
    }

    // /**
    //  * @return Passeport2[] Returns an array of Passeport2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Passeport2
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
