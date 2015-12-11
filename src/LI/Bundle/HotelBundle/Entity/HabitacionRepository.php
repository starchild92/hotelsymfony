<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * HabitacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HabitacionRepository extends EntityRepository
{
	/* Devuelve una habitación dado el tipo_id */
	public function habitacion_por_tipo($tipo_id){
		$query = $this->getEntityManager()
				->createQuery('SELECT u 
				FROM LIHotelBundle:Habitacion u 
				WHERE u.tipo = :tipo_id');
		$query->setParameter('tipo_id', $tipo_id);
		$result = $query->getResult();
        
        return $result;
	}
}
