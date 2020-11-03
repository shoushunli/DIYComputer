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
		echo $brand. "+" .$PG. "+".$PL. "+". $CPL. "+" .$CG;
	}

}
