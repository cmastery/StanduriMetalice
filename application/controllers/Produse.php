<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//For the sake of debugging
ini_set('xdebug.var_display_max_depth',-1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);

class Produse extends CI_Controller {
	 
	 public function __construct(){
		 parent::__construct();
		 $this->load->helper("url");
		 $this->load->helper("preformat");
		 $this->load->helper("array");
		 $this->load->library("parser");
		 $this->load->model("informatii");
		 $this->load->model("produsem");
		 $this->load->database();
	 }
	
	function _remap($method){
		if(($method != null || $method != "") && $this->uri->segment(2)){
			$this->produs($this->uri->segment(2));
		} else {
			$this->index();
		}
	}
	 
	public function index(){
		
		$headerData = $this->informatii->iaInformatii();
		$indexProduse["produse"] = $this->produsem->iaProduse();
		$navData["categorii"] = $this->informatii->categorii();
		
		var_dump($indexProduse);
		
		$this->parser->parse('header', $headerData);
		$this->parser->parse('sidenav', $navData);
		$this->parser->parse('produse', $indexProduse);
		$this->parser->parse('footer', $headerData);
		
	}
	
	public function produs($k){
		//var_dump($this->produsem->iaProdus($k));
		$produsData = $this->produsem->iaProdus($k);
		$headerData = $this->informatii->iaInformatii();
		$indexProduse["produse"] = $this->produsem->iaProduse();
		$navData["categorii"] = $this->informatii->categorii();
		
		var_dump($this->produsem->iaProdus($k));
		
		$this->parser->parse('header', $headerData);
		$this->parser->parse('sidenav', $navData);
		$this->parser->parse('produs', $produsData);
		$this->parser->parse('footer', $headerData);
	}
	
}
