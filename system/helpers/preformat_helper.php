<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('preformatURI')){
	function preformatURI($string){
		if($string != null || $string != ""){
			$string = str_replace(" ", "_", $string);
			$string = strtolower($string);
		}
		return $string;
	}
}

if(!function_exists('backToNormal')){
	function backToNormal($string){
		if($string != null || $string != ""){
			$string = str_replace("_", "", $string);
		}
		return $string;
	}
}
