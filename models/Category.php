<?php 
	require_once('Model.php');
	class Category extends Model{
		var $table = 'categories';
		function create($data){
			$query = "INSERT INTO categories(name,slug,description) VALUES ('".$data['name']."','".$data['slug']."','".$data['description']."')";
			
			$result = $this->conection->query($query);
			return $result;
		}
		public function update($data){
			$query = "UPDATE categories SET name = '".$data['name']."',description='".$data['description']."',slug = '".$data['slug']."' WHERE id = ".$data['id'];
			$result = $this->conection->query($query);
			return $result;
		}
	}
 ?>