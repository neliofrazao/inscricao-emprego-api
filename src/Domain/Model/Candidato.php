<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario19
 * Date: 02/06/2018
 * Time: 11:33
 */

namespace Domain\Model;


use Doctrine\Common\Collections\Collection;

class Candidato
{
    /**
     * @var int
     */
    private $idCandidato;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $telefone;
    /**
     * @var string
     */
    private $curriculo;
    /**
     * @var Collection
     */
    private $habilidadesTecnicas;
    /**
     * @var Collection
     */
    private $experienciasProfissionais;
}