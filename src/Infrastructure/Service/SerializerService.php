<?php
namespace Infrastructure\Service;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    
    public function converte($json, $tipo) {

        return $this->serializer->deserialize($json, $tipo, 'json');
        
        // try {
        //     return $this->serializer->deserialize($json, $tipo, 'json');
        // } catch (Exception $exc) {
        //     dump($request->re);
        //     die;
        //     echo $exc->getTraceAsString();
        // }
    }
}

