<?php

namespace Codebender\ArduinoEditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        if (!$session->has('code'))
        {
            $session->set('code', '###Init###');
        }

        return $this->render('CodebenderArduinoEditorBundle:Default:index.html.twig');
    }

    public function updateAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            $data = $request->request->get('data');
            $session = $request->getSession();
            $session->set('code', $data);
            return new JsonResponse(array('data' => 'complete'));
        }

        return new Response('Not an ajax request.', 400);
    }
}
