<?php
require_once '../model/modeldoctor.php';
class historiacontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $doctor=new Modelo();

        $dato=$historia->mostrar("historia", "1");
        require_once '../view/historia/mostrar.php';
    }

    }
