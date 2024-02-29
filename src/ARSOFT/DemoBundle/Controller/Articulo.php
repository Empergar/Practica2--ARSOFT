<?php
namespace ARSOFT\DemoBundle\Controller;

class Articulo {
    var $id;
    var $title;
    var $created;
    
    public function __construct( $id,  $title,  $created) {
        $this->id = $id;
        $this->title = $title;
        $this->created = $created;
    }

    function getId() {
        return $this->id;
    }
    function getTitle() {
        return $this->title;
    }
    function getCreated() {
        return $this->created;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setTitle($title) {
        $this->title = $title;
    }
    function setCreated($created) {
        $this->created = $created;
    }
}




