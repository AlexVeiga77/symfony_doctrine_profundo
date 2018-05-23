<?php

namespace App\Repository;

use App\Entity\Organizacao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * @method Organizacao|null find($id, $lockMode = null, $lockVersion = null)
 * @method Organizacao|null findOneBy(array $criteria, array $orderBy = null)
 * @method Organizacao[]    findAll()
 * @method Organizacao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganizacaoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Organizacao::class);
    }

//    /**
//     * @return Organizacao[] Returns an array of Organizacao objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Organizacao
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
