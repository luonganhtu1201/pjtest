<?php 
	require_once('models/User.php');
	require_once('controllers/admin/BaseController.php');
	class UserController extends BaseController{
		var $model;
		function __construct(){
			parent::__construct();
			$this->model = new User();
		}
		function list(){
			$users = $this->model->list();
			require_once('views/User/list.php'); 
		}
		function detail(){
			$id = $_GET['id'];
			$user = $this->model->detail($id);
			require_once('views/User/detail.php');
		}
		function create(){
			require_once('views/User/create.php');
		}
		function store(){
			$data = $_POST;
			$data['avatar']="/".$_FILES["avatar"]["name"];
			$target_file = "public/uploads/" . basename($_FILES["avatar"]["name"]);
		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=user&act=list');
		}
		function delete(){
			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			if ($success) {
				setcookie('success','Xóa thành công',time()+5);
			} else {
				setcookie('error','Xóa không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=user&act=list');
		}
		function edit(){
			$id = $_GET['id'];
			$user = $this->model->detail($id);
			$users = $this->model->distinctPermission();
			require_once('views/User/edit.php');
		}
		function update(){
			$data = $_POST;
			$data['avatar']="/".$_FILES["avatar"]["name"];
			$target_file = "public/uploads/" . basename($_FILES["avatar"]["name"]);
		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Cập nhật thành công',time()+5);
			} else {
				setcookie('error','Cập nhật không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=user&act=list');
		}
	}
 ?>