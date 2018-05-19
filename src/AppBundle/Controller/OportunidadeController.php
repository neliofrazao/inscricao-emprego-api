<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Domain\Model\Oportunidade;

/**
 * Description of OportunidadeController
 *
 * @author nelioFrazao
 */
class OportunidadeController extends Controller {
    
    /**
     * @Route ("/oportunidade/salvar")
     * @Method ("POST")
     * @param Request $request
     */
    public function salvarAction(Request $request) {
        $serializerService = $this->get('infra.serializer.service');
        $oportunidadeService = $this->get('app.oportunidade.service');

        try {
            $oportunidade = $serializerService->converte($request->getContent(), Oportunidade::class);
            $oportunidadeService->salvar($oportunidade);
        } catch (Exception $exc) {
            dump($exc->getTraceAsString());
            die;
        }
        dump('ok');
        die;
    }
}
