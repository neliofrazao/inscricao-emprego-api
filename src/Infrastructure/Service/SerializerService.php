<?php
namespace Infrastructure\Service;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;

/**
 * Description of SerializerService
 *
 * @author nelioFrazao
 */
class SerializerService {
    /**
     * @var Serializer
     */
    private $serializer;
    
     /**
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer) {
        $this->serializer = $serializer;
    }

    /**
     * @param $json
     * @param $tipo
     * @return array|\JMS\Serializer\scalar|mixed|object
     */
    public function converte($json, $tipo) {

         try {
             return $this->serializer->deserialize($json, $tipo, 'json');
         }catch (\Exception $exception){
             dump($exception->getMessage()); die;
         }
    }

    /**
     * @param $data
     * @param array $groups
     * @return mixed|string
     */
    public function toJsonByGroups($data, array $groups = ['default']){
        return $this->serializer->serialize(
            $data,
            'json',
            SerializationContext::create()->setGroups($groups)
        );
    }
}

