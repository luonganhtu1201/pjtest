<?php 
	require_once('Model.php');
	class Post extends Model
	{
		var $table = 'posts';
		function create($data){
			$sql ="INSERT INTO posts(name,description,music,avatar,slug,view,user_id,category_id,song_lyric,singer_id) VALUES ('".$data['name']."','".$data['description']."','".$data['music']."','".$data['avatar']."','".$data['slug']."','".$data['view']."','".$data['user_id']."','".$data['category_id']."','".$data['song_lyric']."','".$data['singer_id']."')";
			$result = $this->conection->query($sql);
			return $result;
		}
		function update($data){
			if ($_FILES['avatar']['name']=='') {
				$sql = "UPDATE posts SET name = '".$data['name']."',description = '".$data['description']."',music = '".$data['music']."',slug = '".$data['slug']."',user_id = '".$data['user_id']."',category_id = '".$data['category_id']."',song_lyric = '".$data['song_lyric']."',singer_id = '".$data['singer_id']."' WHERE id = ".$data['id'];
			}else{
				$sql = "UPDATE posts SET name = '".$data['name']."',description = '".$data['description']."',music = '".$data['music']."',avatar = '".$data['avatar']."',slug = '".$data['slug']."',user_id = '".$data['user_id']."',category_id = '".$data['category_id']."',song_lyric = '".$data['song_lyric']."',singer_id = '".$data['singer_id']."' WHERE id = ".$data['id'];
			}
			
			$result = $this->conection->query($sql);
			return $result;
		}
		function findPostSingerById($id,$colums,$match){
			// $id=$_GET['id'];
			$sql = "SELECT * FROM posts WHERE ".$colums." ".$match." ".$id;
			$result = $this->conection->query($sql);
			$siger = array(); 
			while ($row = $result->fetch_assoc()) {
				$singer[] = $row;
			}
			return $singer;
		}

		function sum($id,$colum){
			$sql = "SELECT SUM(".$colum.")"." FROM posts WHERE singer_id = ".$id;
			$result = $this->conection->query($sql)->fetch_assoc();
			return $result;
		}
		function count($id,$colum){
			$sql = "SELECT COUNT(".$colum.")"." FROM posts WHERE singer_id = ".$id;
			$result = $this->conection->query($sql)->fetch_assoc();
			return $result;
		}
	}
 ?>