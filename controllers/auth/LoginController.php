<?php
/**
 * 5cc
 */
require_once 'controllers/auth/BaseController.php';
require_once 'models/User.php';

class LoginController extends BaseController
{
	
	public function loginForm(){
		if (!empty($_SESSION['auth'])) {
			return $this->redirect('?admin=admin&mod=admin&act=admin');
		}
		return $this->view('views/auth/login');
	}

	public function login(){
		$data = $_POST;

		$modelUser = new User();
		$users = $modelUser->list();
		

		foreach ($users as $user) {
			if ($user['email'] == $data['email'] && $user['password'] == md5($data['password'])) {

				$_SESSION['auth'] = $user;
				return $this->redirect('?admin=admin&mod=admin&act=admin');

			}
		}

		$_SESSION['error'] = 'lỗi đăng nhập';
		return $this->back();
	}
}
?>