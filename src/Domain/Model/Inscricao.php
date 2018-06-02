<?php
namespace Domain\Model;

/**
 * Description of Inscricao
 *
 * @author nelioFrazao
 */
class Inscricao {
    /**
     * @var int
     */
    private $idInscricao;
    /**
     * @var Candidato
     */
    private $candidato;
    /**
     * @var Oportunidade
     */
    private $oportunidade;
    /**
     * @var string
     */
    private $codigoConfirmacao;
    /**
     * @var boolean
     */
    private $ativa;
}
