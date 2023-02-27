<?php 
	require_once('models/Category.php');
	require_once('controllers/admin/BaseController.php');
	class CategoryController extends BaseController{

		public $model;
		function __construct(){
			parent::__construct();
			$this->model = new Category();
		}
		function list(){
			$categories = $this->model->list();
			$this->view('views/Category/list',[
				'categories'=>$categories
			]);
		}
		function detail(){
			$id = $_GET['id'];
			$category = $this->model->detail($id);
			require_once('views/Category/detail.php');
		}
		function create(){
			require_once('views/Category/create.php');
		}
		function store(){
			$data = $_POST;

			require_once('public/edit_slug.php');
			$data['slug']= vn_to_str($data['name']);
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";
			// die;
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công',time()+5);
			}
			header('Location:?admin=admin&mod=category&act=list');
		}
		function delete(){
			$id = $_GET['id'];
			$category = $this->model->destroy($id);
			if ($category) {
				setcookie('success','Xóa thành công',time()+5);
			} else {
				setcookie('error','Xóa không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=category&act=list');
		}
		function edit(){
			$id = $_GET['id'];
			$category = $this->model->detail($id);
			require_once('views/Category/edit.php');
		}
		function update(){
			$data = $_POST;
			require_once('public/edit_slug.php');
			$data['slug']= vn_to_str($data['name']);
			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Update thành công',time()+5);
			} else {
				setcookie('error','Update thất bại',time()+5);
			}
			header('Location: ?admin=admin&mod=category&act=list');
		}
	}
 ?>