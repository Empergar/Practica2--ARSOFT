<?php

namespace ARSOFT\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListarController extends Controller{
       
    public function tarea1Action(){
        
         $articulos = [
        ['id' => 1, 'title' => 'Primer Artículo', 'created' => '2024-02-14'],
        ['id' => 2, 'title' => 'Segundo Artículo', 'created' => '2024-02-15'],
        ['id' => 3, 'title' => 'Tercer Artículo', 'created' => '2024-02-16'],
        ];
        
        return $this->render('ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig', array('articulos' => $articulos));
    }
    
     public function tarea2Action($id){
        $articuloBuscar = $this->buscarArticuloPorId($id);  
        return $this->render('ARSOFTDemoBundle:MisVistas:articuloId.html.twig', array('articulo' => $articuloBuscar));
    }
    
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
