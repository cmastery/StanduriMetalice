<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 
	 public function __construct(){
		 parent::__construct();
		 $this->load->helper("url");
		 $this->load->helper("preformat");
		 $this->load->library("parser");
		 $this->load->model("informatii");
		 $this->load->database();
	 }
	 
	public function index(){
		
		$k = $this->db->query("SELECT prefata FROM config LIMIT 1");
		
		$headerData = array();
		$headerData = $this->informatii->iaInformatii();
		
		$indexData = (array)$k->first_row();
		$indexData["clienti"] = $this->informatii->clientiiNostri();
		
		$this->parser->parse('header', $headerData);
		
		$navData["categorii"] = $this->informatii->categorii();
		
		$this->parser->parse('sidenav', $navData);
		
		$this->parser->parse('home', $indexData);
		$this->parser->parse('footer', $headerData);
		
	}
	
	public function cerere(){
		$data = $this->informatii->iaInformatii();
		$this->parser->parse('comanda', $data);
	}
}
