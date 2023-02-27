<?php 
	require_once('Model.php');

	class User extends Model{
		var $table = 'users';
		
		function create($data){
			$query="INSERT INTO users (name,email,password,avatar,permission) VALUE ('".$data['name']."','".$data['email']."',md5('".$data['password']."'),'".$data['avatar']."',permission='".$data['permission']."')";
    		$result = $this->conection->query($query);
			return $result;
		}
		function update($data){
			if ($_FILES['avatar']['name']=='') {
				$query = "UPDATE users SET name = '".$data['name']."',email = '".$data['email']."',password = md5('".$data['password']."'),permission='".$data['permission']."' WHERE id =".$data['id'];
			}else{
				$query = "UPDATE users SET name = '".$data['name']."',email = '".$data['email']."',password = md5('".$data['password']."'),avatar = '".$data['avatar']."',permission='".$data['permission']."' WHERE id =".$data['id'];
			}
			
			$result = $this->conection->query($query);
			return $result;
		}
		function distinctPermission(){
			$query = "SELECT DISTINCT permission from users";
			$result = $this->conection->query($query);
			$this->table = array();
			while ($row = $result->fetch_assoc()) {
				$this->table[]=$row;
			}
			return $this->table;
		}
	}
 ?>