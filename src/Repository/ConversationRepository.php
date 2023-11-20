<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Conversation;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Conversation>
 *
 * @method Conversation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conversation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conversation[]    findAll()
 * @method Conversation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConversationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversation::class);
    }

    public function findByCreator(User $user)
    {
        return $this->createQueryBuilder('c')
            ->where('c.createdBy = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }
    

    public function findConversationsByUser(User $user)
    {
        return $this->createQueryBuilder('c')
            ->join('c.participants', 'p')
            ->where('p.id = :userId')
            ->setParameter('userId', $user->getId())
            ->getQuery()
            ->getResult();
    }

    public function findLatestConversationBetweenUsers(User $currentUser, User $otherUser)
{
    $qb = $this->createQueryBuilder('c');

    $qb->leftJoin('c.participants', 'p')
       ->where(
           $qb->expr()->orX(
               $qb->expr()->andX(
                   $qb->expr()->eq('c.createdBy', ':currentUser'),
                   $qb->expr()->isMemberOf(':otherUser', 'c.participants')
               ),
               $qb->expr()->andX(
                   $qb->expr()->eq('c.createdBy', ':otherUser'),
                   $qb->expr()->isMemberOf(':currentUser', 'c.participants')
               )
           )
       )
       ->orderBy('c.createdAt', 'DESC') // ou un autre champ qui détermine l'ordre chronologique
       ->setMaxResults(1)
       ->setParameters([
           'currentUser' => $currentUser,
           'otherUser' => $otherUser
       ]);

    return $qb->getQuery()->getOneOrNullResult();
}

    


//    /**
//     * @return Conversation[] Returns an array of Conversation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Conversation
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}