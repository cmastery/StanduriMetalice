<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//For the sake of debugging
ini_set('xdebug.var_display_max_depth',-1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);

class Categorii extends CI_Controller {
	 
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
			$this->index($this->uri->segment(2));
		} else {
			$this->index();
		}
	}
	 
	 // Afisam rezultatele in functie de categorie sau subcategorie
	 // Daca accesam categoriile principale, linkul va fii de genul 			domeniu.ro/categorii/nume_categorie								Afisam subcategoriile
	 // Daca accesam subcategoriile, linkul va deveni								domeniu.ro/categorii/nume_subcategorie						Afisam produsele/serviciile
	 
	 
	public function index($k){
		$headerData = array();
		$categorii = array();
		$c = array();
		$subcategorii = array();
		
		$headerData = $this->informatii->iaInformatii();
		$navData["categorii"] = $this->informatii->categorii();
		
		//var_dump($indexCategorii);
		
		$this->parser->parse('header', $headerData);
		$this->parser->parse('sidenav', $navData);
		
		$q = $this->db->select("id")->where("nume", str_replace("_", " ", $k))->get("categorii");
		if($q->num_rows() == 1){
			$indexCategorii["categorii"] = $this->produsem->formatCategorii($this->produsem->iaCategorii($k), $k);
			$this->parser->parse('categorii', $indexCategorii);
		} else {
			$q = $this->db->select("id")->where("nume", str_replace("_", " ", $k))->get("subcategorii");
			if($q->num_rows() == 1){
				$indexProduse["produse"] = $this->produsem->iaProduse($k);
				$this->parser->parse('produse', $indexProduse);
			}
		}
		
		
		$this->parser->parse('footer', $headerData);
		
	}
}
