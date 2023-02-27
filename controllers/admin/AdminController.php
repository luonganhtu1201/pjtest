<?php
	require_once('controllers/admin/BaseController.php');
	class AdminController extends BaseController{
		public $model;
		function __construct(){
			parent::__construct();
		}
		function admin(){
			$this->view('views/Admin/admin');
		}
	}
 ?>