<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpu extends CI_Controller {

	public function index()
	{
		$brand = $_GET['brand_Name'];
		$PG 	 = $_GET['product_Gen'];
		$PL		 = $_GET['product_Level'];
		$CPL   = $_GET['cpu_PL'];
		$CG	   = $_GET['core_g'];
		if($PL != "") {
			if($CPL == "Overclock" && $brand == "Intel") {
					$CPL = 'K';
			} elseif ($CPL == "Overclock" && $brand == "AMD") {
					$CPL = 'X';
			} elseif($CPL == "Low Power" && $brand == "Intel") {
					$CPL = 'T';
			} else {
				$CPL = "";
			}
		}
		if($CG != "") {
			if($CG == true) {
				if ($brand == "Intel") {
					$CG = "";
				} else {
					$CG = "G";
				}
			} else {
				if ($brand == "Intel") {
					$CG = "F";
				} else {
					$CG = "";
				}
			}
		}

		$this->load->model('cpu_model');

		$result = $this->cpu_model->cpu_search($brand, $PL.$PG, $CPL, $CG);
		return ($result);
	}

	public function cpu_delete() {
			$skuDelete = $_GET['sku'];
			$this->load->model('cpu_model');
			$this->cpu_model->cpu_delete_db($skuDelete);

	}

	public function cpu_update() {
			$skuUpdate = $_GET['skuUpdate'];
			$attUpdate = $_GET['attUpdate'];
			$this->load->model('cpu_model');
			// This result is the search of the newly updated data
			// will use this data to overwrite the table we currently see in the frontend
			$result = $this->cpu_model->cpu_update_db($skuUpdate, $attUpdate);

			return $result;

	}

}
