<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario19
 * Date: 02/06/2018
 * Time: 11:42
 */

namespace Domain\Model;


class ExperienciaProfissional
{
    /**
     * @var int
     */
    private $idExperienciaProfissional;
    /**
     * @var string
     */
    private $cargo;
    /**
     * @var string
     */
    private $descricao;
    /**
     * @var \DateTime
     */
    private $periodoInicial;
    /**
     * @var \DateTime
     */
    private $periodoFinal;
    /**
     * @var boolean
     */
    private $trabalhoAtual;

}