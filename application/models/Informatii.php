<?php

class Informatii extends CI_Model {
	
		public $columns;
		
        public function __construct() {
            parent::__construct();
			$this->load->database();
        }
		
		public function iaInformatii($exclude = ''){
			
			if($exclude != ''){
				$metaData = $this->db->query("SHOW COLUMNS FROM config");
				
				foreach($metaData->result() as $columnData){
					if($columnData->Field != $exclude){
						$columns[] = $columnData->Field;
					}
				}
			
			//echo var_dump($columns);
			}
			
			if(is_array($columns)){
				$selection = null;
				foreach($columns as $column){
					$selection .= $column . ", ";
				}
				$selection = $this->db->escape(substr($selection, 0, -2));
			} else {
				$selection = "*";
			}
			
			$result = $this->db->query("SELECT " . $selection . " FROM config LIMIT 1");
			
			if($result->num_rows() == 1){
				return $result->first_row();
			} 
			
		}
		
		public function clientiiNostri(){
			$clientiA = array();
			$i = 1;
			$clientiS = $this->db->query("SELECT * FROM clienti");
			return $clientiS->result_array();
		}
		
		public function categorii(){
			$i =1;
			$navigare =  array();
			$selCategorii = $this->db->select("id, nume")->get("categorii");
			if($selCategorii->num_rows() > 0){
				foreach($selCategorii->result() as $categorie){
					$n = 1;
					$navigare[$i]["categorie"] = $categorie->nume;
					$navigare[$i]["url"] = preformatURI($categorie->nume);
					$selSubcategorii = $this->db->query("SELECT * FROM subcategorii WHERE parentID = '" . $categorie->id . "';");
					if($selSubcategorii->num_rows() > 0){
						foreach($selSubcategorii->result() as $subcategorie){
							$navigare[$i]["subcategorii"][$n]["subcategorie"] = $subcategorie->nume;
							$navigare[$i]["subcategorii"][$n]["url"] =  preformatURI($subcategorie->nume);
							$n++;
						}
					}
				$i++;
				}
			}
			return $navigare;
		}

}