<?php
namespace Domain\Model;


/**
 * Description of Oportunidade
 *
 * @author lab05usuario20
 */
class Oportunidade {
    /**
     * @var int
     */
    private $idOportunidade;
    /*
     * @var string
     */
    private $descricao;
    /*
     * @var \DateTime
     */
    private $periodoInicial;
    /*
     * @var \DateTime
     */
    private $periodoFinal;

    public function __construct(
        $descricao,
        $periodoFinal,
        $periodoInicial
    ) {
        $this->descricao = $descricao;
        $this->periodoFinal = $periodoFinal;
        $this->periodoInicial = $periodoInicial;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }
}