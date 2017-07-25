<?php defined('BASEPATH')OR exit('no direct script access allowed');

/**
 * 
 */
 class Beranda extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('Beranda');
 	}
 } ?>