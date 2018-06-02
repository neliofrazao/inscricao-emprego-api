<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        } catch (\Exception $exception) {
             return new Response($exception->getMessage(), 400);
        }
         return new Response("Operação concluida com sucesso");
    }

    /**
     * @Route("/oportunidade/listar")
     */
    public function getOportunidadesAction()
    {
        $oportunidadeService = $this->get('app.oportunidade.service');
        $serializerService = $this->get('infra.serializer.service');

        try {
            $oportunidades = $oportunidadeService->listarTudo();
        } catch (\Exception $exception) {
            return new Response($exception->getMessage(), 400);
        }

        return new Response($serializerService->toJsonByGroups($oportunidades));
    }
}