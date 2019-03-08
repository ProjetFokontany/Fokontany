<?php

namespace App\Repository;

use App\Entity\Appartements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Appartements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Appartements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Appartements[]    findAll()
 * @method Appartements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppartementsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Appartements::class);
    }

    // /**
    //  * @return Appartements[] Returns an array of Appartements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Appartements
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}