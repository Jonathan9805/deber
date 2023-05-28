
<!-- //necesitamos directivas php -->
<?php
  //public y enter y sale el codigo
  class Menus extends CI_Controller
  {

    function __construct()
    {
      // metodo especial que no retorna nada pero hacemos herencias
      parent::__construct(); //el constrructor nos permite inicializar
    }
    // Renderización d ela vista que muesta los desayunos
    // vamos a crear
    public function desayunos() { //con esta funcion vamos a renderizar
      $this->load->view('header');
      $this->load-> view('menus/desayunos');
      $this->load->view('footer');
    }
    public function almuerzos(){
      $this->load->view('header');
      $this->load-> view('menus/almuerzos');
      $this->load->view('footer');
    }

    public function meriendas(){
      $this->load->view('header');
      $this->load-> view('menus/meriendas');
      $this->load->view('footer');
    }
    public function platoscarta(){
      $this->load->view('header');
      $this->load-> view('menus/platoscarta');
      $this->load->view('footer');
    }
  }// no borrar el cierre de la clase

 ?>
