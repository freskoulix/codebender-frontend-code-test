<?php

namespace Codebender\ArduinoEditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

use Codebender\ArduinoEditorBundle\Handler;

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

    public function libraryAction(Request $request)
    {
        //die($request);
        //if ($request->isXMLHttpRequest()) {
            //$data = $request->request->get('data');
            //$session = $request->getSession();
            //$session->set('code', $data);
            //return new JsonResponse(array('data' => 'complete'));
            $library = $request->request->get('library');

            $utilities = $this->get('codebender_arduino_editor.handler');
            $libman_url = $this->container->getParameter('codebender_arduino_editor.libman_url').trim($library);

            $data = $utilities->get($libman_url);

            $normalizer = new GetSetMethodNormalizer();
            $encoder = new JsonEncoder();
            $serializer = new Serializer(array($normalizer), array($encoder));

            $data_array = json_decode($data, true);
            $status = false;
            $url = '';
            if ($data_array['success']) {
                $status = true;
                $url = $this->container->getParameter('codebender_arduino_editor.library_url').trim($library);
            }

            return new JsonResponse(array(
                                        'status' => $status,
                                        'url' => $url
                                    ));
        //}

        //return new Response('Not an ajax request.', 400);
        return new Response('Success!');
    }
}
