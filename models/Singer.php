<?php 
	require_once('Model.php');
	class Singer extends Model{
		var $table = 'singers';
		function create($data){
			$sql = "INSERT INTO singers(name,description,real_name,birth,avatar,album_information) VALUES ('".$data['name']."','".$data['description']."','".$data['real_name']."','".$data['birth']."','".$data['avatar']."','".$data['album_information']."')";
			$result = $this->conection->query($sql);
			return $result;
		}
		function update($data){
			if ($_FILES['avatar']['name'] == '') {
				$sql = "UPDATE singers SET name = '".$data['name']."',description = '".$data['description']."',real_name = '".$data['real_name']."',birth = '".$data['birth']."',album_information = '".$data['album_information']."' WHERE id = ".$data['id'];
			}else{
				$sql = "UPDATE singers SET name = '".$data['name']."',description = '".$data['description']."',real_name = '".$data['real_name']."',birth = '".$data['birth']."',album_information = '".$data['album_information']."',avatar = '".$data['avatar']."' WHERE id = ".$data['id'];
			}
			
			$result = $this->conection->query($sql);
			return $result;
		}
		function listTop($top,$deas){
			$sql = "SELECT * FROM singers ORDER BY id ".$deas.' LIMIT '.$top;
			$result = $this->conection->query($sql);
			$this->table = array();
			while ($row = $result-> fetch_assoc()) {
				$this->table[]=$row;
			}
			return $this->table;
		}
		function exceptArtist($id,$top){
			$sql = "SELECT * FROM singers WHERE id != ".$id.' LIMIT '.$top;
			$result = $this->conection->query($sql);
			$this->table = array();
			while ($row = $result-> fetch_assoc()) {
				$this->table[]=$row;
			}
			return $this->table;
		}
	}
 ?>