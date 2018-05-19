<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario19
 * Date: 19/05/2018
 * Time: 14:25
 */

namespace Infrastructure\Persistence\Doctrine;


use Doctrine\ORM\EntityRepository;
use Domain\Model\Oportunidade;
use Domain\Repository\OportunidadeRepositoryInterface;

class OportunidadeRepository extends EntityRepository implements OportunidadeRepositoryInterface
{
    /**
     * @param Oportunidade $oportunidade
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function salvar(Oportunidade $oportunidade)
    {
        $this->getEntityManager()->persist($oportunidade);
        $this->getEntityManager()->flush();
    }

}