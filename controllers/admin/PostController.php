<?php 	
	require_once('models/Post.php');
	require_once('models/Category.php');
	require_once('models/Singer.php');
	require_once('models/User.php');
	require_once('controllers/admin/BaseController.php');
	class PostController extends BaseController{
		var $model;
		var $modelCate;
		var $modelSin;
		var $modelUs;
		function __construct(){
			parent::__construct();
			$this->model = new Post();
			$this->modelCate = new Category();
			$this->modelSin = new Singer();
			$this->modelUs = new User();
			
		}
		function list(){
			$posts = $this->model->list();
			require_once('views/Post/list.php');
		}
		function detail(){
			$id = $_GET['id'];
			$post = $this->model->detail($id);
			require_once('views/Post/detail.php');
		}
		function delete(){
			$id = $_GET['id'];
			$post = $this->model->destroy($id);
			if ($post) {
				setcookie('success','Xóa thành công',time()+5);
			} else {
				setcookie('error','Xóa không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=post&act=list');
		}
		function create(){
			$category = $this->modelCate->list();
			$user = $this->modelUs->list();
			$singer = $this->modelSin->list();
			require_once('views/Post/create.php');
		}
		function store(){
			$data = $_POST;
			require_once('public/edit_slug.php');
			$data['slug']= vn_to_str($data['name']);
			$data['avatar']="/".$_FILES["avatar"]["name"];
			$data['music'] = "/".$_FILES['music']['name'];
			$target_file = "public/uploads/" . basename($_FILES["avatar"]["name"]);
		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
		    $target_file = "public/uploads/Music/" . basename($_FILES["music"]["name"]);
		    move_uploaded_file($_FILES["music"]["tmp_name"], $target_file);
		    $success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công',time()+5);
			}
			header('Location:?admin=admin&mod=post&act=list');
		}
		function edit(){
			$id = $_GET['id'];
			$category = $this->modelCate->list();
			$user = $this->modelUs->list();
			$singer = $this->modelSin->list();
			$post = $this->model->detail($id);
			require_once('views/Post/edit.php');
		}
		function update(){
			$data = $_POST;
			require_once('public/edit_slug.php');
			$data['slug']= vn_to_str($data['name']);
			$data['avatar']="/".$_FILES["avatar"]["name"];
			$data['music'] = "/".$_FILES['music']['name'];
			$target_file = "public/uploads/" . basename($_FILES["avatar"]["name"]);
		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
		    $target_file = "public/uploads/Music/" . basename($_FILES["music"]["name"]);
		    move_uploaded_file($_FILES["music"]["tmp_name"], $target_file);
		    $success = $this->model->update($data);
			if ($success) {
				setcookie('success','Cập nhật thành công',time()+5);
			} else {
				setcookie('error','Cập nhật không thành công',time()+5);
			}
			header('Location:?admin=admin&mod=post&act=list');
		}
	}
 ?>