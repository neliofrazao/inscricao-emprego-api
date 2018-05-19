<?php
namespace Domain\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Description of Oportunidade
 *
 * @author nelioFrazao
 */
class Oportunidade {
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $idOportunidade;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $descricao;
    /**
     * @var \DateTime
     * @Serializer\SerializedName("periodoInicial")
     * @Serializer\Type("DateTime<'d/m/Y'>")
     */
    private $periodoInicial;
    /**
     * @var \DateTime
     * @Serializer\SerializedName("periodoFinal")
     * @Serializer\Type("DateTime<'d/m/Y'>")
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
}
