<?php

namespace App\Repository;

use App\Entity\SituationMatrimoniale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SituationMatrimoniale|null find($id, $lockMode = null, $lockVersion = null)
 * @method SituationMatrimoniale|null findOneBy(array $criteria, array $orderBy = null)
 * @method SituationMatrimoniale[]    findAll()
 * @method SituationMatrimoniale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SituationMatrimonialeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SituationMatrimoniale::class);
    }

    // /**
    //  * @return SituationMatrimoniale[] Returns an array of SituationMatrimoniale objects
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
    public function findOneBySomeField($value): ?SituationMatrimoniale
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
