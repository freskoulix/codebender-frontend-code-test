<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/b4dbde5')) {
            // _assetic_b4dbde5
            if ($pathinfo === '/css/b4dbde5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b4dbde5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b4dbde5',);
            }

            if (0 === strpos($pathinfo, '/css/b4dbde5_')) {
                if (0 === strpos($pathinfo, '/css/b4dbde5_bootstrap')) {
                    // _assetic_b4dbde5_0
                    if ($pathinfo === '/css/b4dbde5_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b4dbde5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b4dbde5_0',);
                    }

                    // _assetic_b4dbde5_1
                    if ($pathinfo === '/css/b4dbde5_bootstrap-theme.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b4dbde5',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b4dbde5_1',);
                    }

                }

                // _assetic_b4dbde5_2
                if ($pathinfo === '/css/b4dbde5_main_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b4dbde5',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b4dbde5_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/20d858b')) {
            // _assetic_20d858b
            if ($pathinfo === '/js/20d858b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_20d858b',);
            }

            if (0 === strpos($pathinfo, '/js/20d858b_')) {
                // _assetic_20d858b_0
                if ($pathinfo === '/js/20d858b_jquery-1.11.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_20d858b_0',);
                }

                // _assetic_20d858b_1
                if ($pathinfo === '/js/20d858b_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_20d858b_1',);
                }

                // _assetic_20d858b_2
                if ($pathinfo === '/js/20d858b_compilerflasher.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_20d858b_2',);
                }

                if (0 === strpos($pathinfo, '/js/20d858b_part_4_')) {
                    // _assetic_20d858b_3
                    if ($pathinfo === '/js/20d858b_part_4_ace_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_20d858b_3',);
                    }

                    // _assetic_20d858b_4
                    if ($pathinfo === '/js/20d858b_part_4_mode-c_cpp_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_20d858b_4',);
                    }

                    // _assetic_20d858b_5
                    if ($pathinfo === '/js/20d858b_part_4_theme-github_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_20d858b_5',);
                    }

                }

                // _assetic_20d858b_6
                if ($pathinfo === '/js/20d858b_main_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '20d858b',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_20d858b_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
