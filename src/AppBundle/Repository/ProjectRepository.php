<?php

namespace AppBundle\Repository;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends \Doctrine\ORM\EntityRepository
{

    public function findAll()
    {
        return $this->findBy(array(), array('isActive' => 'DESC','name' => 'ASC'));
    }

    public function findActive()
    {
        return $this->findBy(array('isActive' => 1), array('name' => 'ASC'));
    }

    public function findInactive()
    {
        return $this->findBy(array('isActive' => 0), array('name' => 'ASC'));
    }

}
