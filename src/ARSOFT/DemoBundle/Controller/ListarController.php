<?php
/*Practica 2 - Arquitectura del Software - 2023/2024*/
namespace ARSOFT\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListarController extends Controller{
       
    //**************************************************************************
    
     /****
     * Muestra una lista de todos los artículos.
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     ****/
    public function tarea1Action(){
        
         $articulos = [
        ['id' => 1, 'title' => 'Primer Artículo', 'created' => '2024-02-14'],
        ['id' => 2, 'title' => 'Segundo Artículo', 'created' => '2024-02-15'],
        ['id' => 3, 'title' => 'Tercer Artículo', 'created' => '2024-02-16'],
        ];
        
        return $this->render('ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig', array('articulos' => $articulos));
    }
    
    //**************************************************************************
    
    /****
     * Muestra un artículo específico por su ID.
     * 
     * @param int $id -> Se trata del ID del artículo a buscar.
     * @return \Symfony\Component\HttpFoundation\Response
    ****/
    
     public function tarea2Action($id){
        $articuloBuscar = $this->buscarArticuloPorId($id);  
        return $this->render('ARSOFTDemoBundle:MisVistas:articuloId.html.twig', array('articulo' => $articuloBuscar));
    }
    
    
    /****
     * Busca un artículo por su ID en la "base de datos".
     * 
     * @param int $id El ID del artículo a buscar.
     * @return el artículo encontrado
     * @throws NotFoundHttpException Si el artículo no se encuentra.
     ****/
    private function buscarArticuloPorId($id){
        
        $articulos = [
                ['id' => 1, 'title' => 'Primer Artículo', 'created' => '2024-02-14'],
                ['id' => 2, 'title' => 'Segundo Artículo', 'created' => '2024-02-15'],
                ['id' => 3, 'title' => 'Tercer Artículo', 'created' => '2024-02-16'],
        ];
        
        // Buscar en la 'base de datos' de artículos
        foreach ($articulos as $articulo) {
            if ($articulo['id'] == $id) {
                return $articulo;
            }
        }

        // Si el artículo no se encuentra, lanzar una excepción
        throw $this->createNotFoundException('El artículo no existe.');
    }
}
