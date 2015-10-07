<?php

class Produsem extends CI_Model {
	
		
        public function __construct() {
            parent::__construct();
			$this->load->database();
        }
		
		// Apai, futa-l nemtii de cacat de cod
		// Las 3 functii sa faca treaba uneia. Mai mult text, pare mai misto
		
		
		public function iaCategorii(&$v){
			$i =1;
			$navigare =  array();
			if($v == null){
				$selCategorii = $this->db->select("id, nume")->get("categorii");
			} else {
				$selCategorii = $this->db->select("id, nume")->where("nume", str_replace("_", " ", $v))->get("categorii");
			}
			if($selCategorii->num_rows() > 0){
				foreach($selCategorii->result() as $categorie){
					$navigare[$i]["categorie"] = $categorie->nume;
				$i++;
				}
			} else {
				self::iaProduse($v);
			}
			return $navigare;
		}
		
		public function iaSubcategorii($s){
			$i = 1;
			$selSubC = $this->db->select("id, nume, parentID, img")->where("parentID", $s)->get("subcategorii");
			if($selSubC->num_rows() > 0){
				foreach($selSubC->result() as $subcategorie){
					$r[$i]["nume"] = $subcategorie->nume;
					$r[$i]["img"] = $subcategorie->img;
					$r[$i]["url"] = preformatURI($subcategorie->nume);
					$i++;
				}
				return $r;
			}
			return false;
		}
		
		public function formatCategorii($c, &$k){
			if($c != null && is_array($c)){
				$i = 1;
				$array = array(); //faina inspiratie...
				$array = self::iaCategorii($k);
				foreach($c as $k => $v){
					$array[$k]["subcategorii"] = self::iaSubcategorii($k);
				}
				return $array;
			} else {
				return false;
			}
		}
		
		public function iaProduse(&$v){
			if($v == null){
				$selP = $this->db->select("id, nume, desc_scurt, img1")->get("produse");
			} else {
				$idCP = null;
				$selC = $this->db->select("id")->where("nume", str_replace("_", " ", $v))->get("categorii");
				if($selC->num_rows() == 0){
					$selSC = $this->db->select("id")->where("nume", str_replace("_" , " ", $v))->get("subcategorii");
					if($selSC->num_rows() == 1){
						$r = $selSC->first_row();
						$idCP = $r->id;
					}
				} else {
					$r = $selC->first_row();
					$idCP = $r->id;
				}
				if($idCP != null){
					$selP = $this->db->select("id, nume, desc_scurt, img1")->where("cat", $idCP)->get("produse");
				}
			}
			$i = 1;
			$produse = array();
			if($selP->num_rows() > 0){
				foreach($selP->result() as $produs){
					$produse[$i]["id"] = $produs->id;
					$produse[$i]["nume"] = $produs->nume;
					$produse[$i]["desc"] = $produs->desc_scurt;
					$produse[$i]["img"] = $produs->img1;
					$produse[$i]["url"] = preformatURI($produs->nume);
					$i++;
				}
			}
			return $produse;
		}
		
		public function iaProdus($s){
			if($s != null || $s != ""){
				$produsData = array();
				$selP = $this->db->select("id, nume, descriere, img1, img2, img3, img4")->get("produse");
				if($selP->num_rows() > 0){
					foreach($selP->result() as $produs){
						$produsData["id"]  = $produs->id;
						$produsData["nume"] = $produs->nume;
						$produsData["descriere"] = $produs->descriere;
						$produsData["img1"] = $produs->img1;
						$produsData["img2"] = $produs->img2;
						$produsData["img3"] = $produs->img3;
						$produsData["img4"] = $produs->img4;
					}
				}
				return $produsData;
			}
		}
		
}