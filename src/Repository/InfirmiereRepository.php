<?php

namespace App\Repository;

use App\Entity\Infirmiere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Infirmiere>
 *
 * @method Infirmiere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Infirmiere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Infirmiere[]    findAll()
 * @method Infirmiere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfirmiereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Infirmiere::class);
    }

//    /**
//     * @return Infirmiere[] Returns an array of Infirmiere objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Infirmiere
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
