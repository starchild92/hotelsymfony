<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ReservaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservaRepository extends EntityRepository
{
	public function reservas_usuario($iduser){
		$query = $this->getEntityManager()
			->createQuery('SELECT u FROM LIHotelBundle:Reserva u WHERE u.cliente = :iduser');
		$query->setParameter('iduser', $iduser);
		$result = $query->getResult();
		return $result;
	}
}
