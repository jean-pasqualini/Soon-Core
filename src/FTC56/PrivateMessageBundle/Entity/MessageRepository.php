<?php

namespace FTC56\PrivateMessageBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MessageRepository extends EntityRepository
{
    public function getMessagesList($receiver)
    {
        $query = $this->createQueryBuilder('m')
            ->where('m.receiver = :receiver')
            ->setParameter('receiver', $receiver)
            ->join('m.author', 'u')
            ->addSelect('u')
            ->addOrderBy('m.date', 'desc')
            ->setFirstResult(0)
            ->setMaxResults(25)
            ->getQuery();

        return $query->getResult();
    }
}