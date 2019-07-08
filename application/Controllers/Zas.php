<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zas extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }
	public function index()
	{
		$this->load->view('templates/header');
    $this->load->view('content/modo_uso');
    $this->load->view('templates/footer');
	}

  public function strophe_1()
	{
		$this->load->view('templates/header');
    $this->load->view('content/content');
    $this->load->view('templates/footer');
	}

  public function strophe_2()
  {
    $this->load->view('templates/header');
    $this->load->view('content/content_2');
    $this->load->view('templates/footer');
  }

  public function strophe_3()
  {
    $this->load->view('templates/header');
    $this->load->view('content/content_3_7_11');
    $this->load->view('templates/footer');
  }
  public function strophe_4()
  {
    $this->load->view('templates/header');
    $this->load->view('content/content_4_8');
    $this->load->view('templates/footer');
  }

  public function strophe_5()//No está
  {
    $this->load->view('templates/header');
    $this->load->view('content/content_5');
    $this->load->view('templates/footer');
  }

  public function strophe_6() //No esta
  {
    $this->load->view('templates/header');
    $this->load->view('content/content_6');
    $this->load->view('templates/footer');
  }
  public function strophe_7()
  {
    $this->load->view('templates/header');
    $this->load->view('content/content_3_7_11');
    $this->load->view('templates/footer');
}

public function strophe_8()
{
  $this->load->view('templates/header');
  $this->load->view('content/content_4_8');
  $this->load->view('templates/footer');
}

public function strophe_9()
{
  $this->load->view('templates/header');
  $this->load->view('content/content_9_10');
  $this->load->view('templates/footer');
}

public function strophe_10()
{
  $this->load->view('templates/header');
  $this->load->view('content/content_9_10');
  $this->load->view('templates/footer');
}

public function strophe_11()
{
  $this->load->view('templates/header');
  $this->load->view('content/content_3_7_11');
  $this->load->view('templates/footer');
}

public function strophe_12()
{
  $this->load->view('templates/header');
  $this->load->view('content/content_12');
  $this->load->view('templates/footer');
}

public function karaoke(){
  $this->load->view('templates/header');
  $this->load->view('content/karaoke');
  $this->load->view('templates/footer');
}


  public function exercise()
  {
    $this->load->view('templates/header');
    $this->load->view('content/exercises_2');
    $this->load->view('templates/footer');
  }

  public function exercise3()
  {
    $this->load->view('templates/header');
    $this->load->view('content/exercise3');
    $this->load->view('templates/footer');
  }

  public function oral_compression(){
    $this->load->view('templates/header');
    $this->load->view('content/oral_compression');
    $this->load->view('templates/footer');
  }

  public function rasgos(){
    $this->load->view('templates/header');
    $this->load->view('content/rasgos');
    $this->load->view('templates/footer');
  }
  public function phonetic_device(){
    $this->load->view('templates/header');
    $this->load->view('content/phonetic_device');
    $this->load->view('templates/footer');
  }

  public function phenomenon(){
    $this->load->view('templates/header');
    $this->load->view('content/phenomenon');
    $this->load->view('templates/footer');
  }

  public function afi(){
    $this->load->view('templates/header');
    $this->load->view('content/afi');
    $this->load->view('templates/footer');
  }

  public function credits(){
    $this->load->view('templates/header');
    $this->load->view('content/bibliography');
    $this->load->view('templates/footer');
  }
}
