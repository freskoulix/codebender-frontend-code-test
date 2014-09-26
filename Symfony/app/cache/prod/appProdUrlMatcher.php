<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // codebender_arduino_editor_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'codebender_arduino_editor_homepage');
            }

            return array (  '_controller' => 'Codebender\\ArduinoEditorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'codebender_arduino_editor_homepage',);
        }

        // update
        if ($pathinfo === '/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_update;
            }

            return array (  '_controller' => 'Codebender\\ArduinoEditorBundle\\Controller\\DefaultController::updateAction',  '_route' => 'update',);
        }
        not_update:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
