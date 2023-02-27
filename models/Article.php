<?php 
	require_once('Model.php');
	class Article extends Model{
		var $table = 'articles';
		function create($data){
			$query = "INSERT INTO articles(title,content,slug,user_id,thumbnail) VALUES ('".$data['title']."','".$data['content']."','".$data['slug']."','".$data['user_id']."','".$data['thumbnail']."')";
			$result = $this->conection->query($query);
			return $result;
		}
		public function update($data){
			if ($_FILES['thumbnail']['name'] == '') {
				$query = "UPDATE articles SET title='".$data['title']."',slug = '".$data['slug']."',content ='".$data['content']."',user_id = '".$data['user_id']."' WHERE id = ".$data['id'];
			}else{
				$query = "UPDATE articles SET title='".$data['title']."',slug = '".$data['slug']."',content ='".$data['content']."',thumbnail = '".$data['thumbnail']."',user_id = '".$data['user_id']."' WHERE id = ".$data['id'];
			}
			
			$result = $this->conection->query($query);
			return $result;
		}
		function findArt($top){
			$query = "SELECT * FROM articles ORDER BY id DESC LIMIT ".$top;
			$result = $this->conection->query($query);
			$this->table = array();
			while ($row = $result->fetch_assoc()) {
			 	$this->table[] = $row;
			 } 
			 return $this->table;
		}
	}
 ?>