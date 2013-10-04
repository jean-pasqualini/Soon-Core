<?php

namespace FTC56\PrivateMessageBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class MessageRepository extends EntityRepository
{
    public function getArticles($nombreParPage, $page)
    {
        if ((int) $page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
        }

        $query = $this->createQueryBuilder('m')
            ->join('m.author', 'u')
            ->addSelect('u')
            ->getQuery();

        $query->setFirstResult(($page-1) * $nombreParPage)
            ->setMaxResults($nombreParPage);

        return new Paginator($query);
    }
}