<?php

namespace Gt\ItBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ThreadRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ThreadRepository extends EntityRepository
{public function byTime()
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->orderBy('u.date');
        
        return $qb->getQuery()->getResult();
    }
 public function byLimit()
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->orderBy('u.date')->setMaxResults(5);
        
        return $qb->getQuery()->getResult();
    }

}
