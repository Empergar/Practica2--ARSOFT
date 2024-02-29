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

        if (0 === strpos($pathinfo, '/practica1/articulo')) {
            // arsoft_demo_practica1_tarea1
            if ($pathinfo === '/practica1/articulos') {
                return array (  '_controller' => 'ARSOFT\\DemoBundle\\Controller\\DefaultController::tarea1Action',  '_route' => 'arsoft_demo_practica1_tarea1',);
            }

            // arsoft_demo_practica1_tarea2
            if (preg_match('#^/practica1/articulo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arsoft_demo_practica1_tarea2')), array (  '_controller' => 'ARSOFT\\DemoBundle\\Controller\\DefaultController::tarea2Action',));
            }

        }

        if (0 === strpos($pathinfo, '/articulo')) {
            // arsoft_demo_practica2_tarea1
            if ($pathinfo === '/articulos') {
                return array (  '_controller' => 'ARSOFT\\DemoBundle\\Controller\\ListarController::tarea1Action',  '_route' => 'arsoft_demo_practica2_tarea1',);
            }

            // arsoft_demo_practica2_tarea2
            if (preg_match('#^/articulo(?:/(?P<id>\\d{1,2}))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arsoft_demo_practica2_tarea2')), array (  '_controller' => 'ARSOFT\\DemoBundle\\Controller\\ListarController::tarea2Action',  'id' => 2,));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
