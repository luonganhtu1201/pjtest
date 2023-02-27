<?php 	
	require_once('models/Singer.php');
	require_once('controllers/admin/BaseController.php');
	class SingerController extends BaseController{
		var $model;
		function __construct(){
			parent::__construct();
			$this->model = new Singer();
		}
		function list(){
			$singers = $this->model->list();
			require_once('views/Singer/list.php');
		}
		function detail(){
			$id = $_GET['id'];
			$singer = $this->model->detail($id);
			require_once('views/Singer/detail.php');
		}
		function delete(){
			$id=$_GET['id'];
			$singer  = $this->model->destroy($id);
			if ($singer) {
				setcookie('success','Xóa thành công',time()+5);
			} else {
				setcookie('error','Xóa không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=singer&act=list');
		}
		function create(){
			require_once('views/Singer/create.php');
		}
		function store(){
			$data = $_POST;
			$data['avatar']="/".$_FILES["avatar"]["name"];
			$target_file = "public/uploads/" . basename($_FILES["avatar"]["name"]);

		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
			$singer = $this->model->create($data);
			if ($singer) {
				setcookie('success','Thêm thành công',time()+5);
			} else {
				setcookie('error','Thêm không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=singer&act=list');
		}
		function edit(){
			$id = $_GET['id'];
			$singer = $this->model->detail($id);
			require_once('views/Singer/edit.php');
		}
		function update(){
			$data = $_POST;
			$data['avatar']="/".$_FILES["avatar"]["name"];
			$target_file = "public/uploads/" . basename($_FILES["avatar"]["name"]);

		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
		    // echo "<pre>";
		    // 	print_r($data);
		    // echo "</pre>";
		    // die;
			$singer = $this->model->update($data);
			if ($singer) {
				setcookie('success','Cập nhật thành công',time()+5);
			} else {
				setcookie('error','Cập nhật không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=singer&act=list');
		}
	}
 ?>