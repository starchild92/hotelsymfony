<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FacturaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FacturaRepository extends EntityRepository
{
	//OBTENER LA FACTURA DADO EL ID DE LA RESERVA
	public function factura_asociada($idReserva){
		$query = $this->getEntityManager()
			->createQuery('SELECT u FROM LIHotelBundle:Factura u WHERE u.id = :idReserva');
		$query->setParameter('idReserva', $idReserva);
		$result = $query->getResult();
		return $result;
	}
}
