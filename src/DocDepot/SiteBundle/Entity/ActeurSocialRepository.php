<?php

namespace DocDepot\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AlerteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActeurSocialRepository extends EntityRepository
{

	public function save(ActeurSocial $acteurSocial){
		$this->getEntityManager()->persist($acteurSocial);
	}

	public function remove(ActeurSocial $acteurSocial){
		$em = $this->getEntityManager();
		var_dump($em);
		$em->remove($acteurSocial);
	}

	public function commit(){
		$this->getEntityManager()->flush();
	}
}
