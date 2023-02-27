<?php 
	require_once('models/Article.php');
	require_once('controllers/admin/BaseController.php');
	class ArticleController extends BaseController{
		public $model;
		function __construct(){
			parent::__construct();
			$this->model = new Article();
		}
		function list(){
			$articles = $this->model->list();
			$this->view('views/Article/list',[
				'articles'=>$articles
			]);
		}
		function detail(){
			$id = $_GET['id'];
			$article = $this->model->detail($id);
			require_once('views/Article/detail.php');
		}
		function create(){
			require_once('views/Article/create.php');
		}
		function store(){
			$data = $_POST;

			require_once('public/edit_slug.php');
			$data['slug']= vn_to_str($data['title']);
			$data['thumbnail']="/".$_FILES["thumbnail"]["name"];
			$target_file = "public/uploads/" . basename($_FILES["thumbnail"]["name"]);

		    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công',time()+5);
			}
			header('Location:?admin=admin&mod=article&act=list');
		}
		function delete(){
			$id = $_GET['id'];
			$article = $this->model->destroy($id);
			if ($article) {
				setcookie('success','Xóa thành công',time()+5);
			} else {
				setcookie('error','Xóa không thành công',time()+5);
			}
			header('Location: ?admin=admin&mod=article&act=list');
		}
		function edit(){
			$id = $_GET['id'];
			$article = $this->model->detail($id);
			require_once('views/Article/edit.php');
		}
		function update(){
			$data = $_POST;
			require_once('public/edit_slug.php');
			$data['slug']= vn_to_str($data['title']);
			$data['thumbnail']="/".$_FILES["thumbnail"]["name"];
			$target_file = "public/uploads/" . basename($_FILES["thumbnail"]["name"]);

		    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Update thành công',time()+5);
			} else {
				setcookie('error','Update thất bại',time()+5);
			}
			header('Location: ?admin=admin&mod=article&act=list');
		}
	}
 ?>