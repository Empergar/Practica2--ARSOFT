<?php
/*Practica 1 - Arquitectura del Software - 2023/2024*/
namespace ARSOFT\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /****
     * @var array $articulos simula una base de datos de artículos.
    ****/
    private $articulos = [
        ['id' => 1, 'title' => 'Primer Artículo', 'created' => '2024-02-14'],
        ['id' => 2, 'title' => 'Segundo Artículo', 'created' => '2024-02-15'],
        ['id' => 3, 'title' => 'Tercer Artículo', 'created' => '2024-02-16'],
    ];
    
    //**************************************************************************
    
     /****
     * Muestra una lista de todos los artículos.
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     ****/
    public function tarea1Action()
    {
        
        return $this->render('ARSOFTDemoBundle:Default:listarArticulos.html.twig', array('articulos' => $this->articulos));
    }
   //**************************************************************************
    
    /****
     * Muestra un artículo específico por su ID.
     * 
     * @param int $id -> Se trata del ID del artículo a buscar.
     * @return \Symfony\Component\HttpFoundation\Response
    ****/
     public function tarea2Action($id)
    {
        $articuloBuscar = $this->buscarArticuloPorId($id);      
        return $this->render('ARSOFTDemoBundle:Default:articuloId.html.twig', array('articulo' => $articuloBuscar));
    }
    
    /****
     * Busca un artículo por su ID en la "base de datos".
     * 
     * @param int $id El ID del artículo a buscar.
     * @return el artículo encontrado
     * @throws NotFoundHttpException Si el artículo no se encuentra.
     ****/
    
    private function buscarArticuloPorId($id)
    {
        // Buscar en la 'base de datos' de artículos
        foreach ($this->articulos as $articulo) {
            if ($articulo['id'] == $id) {
                return $articulo;
            }
        }

        // Si el artículo no se encuentra, lanzar una excepción
        throw $this->createNotFoundException('El artículo no existe.');
    }
}
