<?php 
	require_once('Conection.php');
	class Model{
		var $table;
		var $conection;
		function __construct(){
			$conection_obj = new Connection();
			$this->conection = $conection_obj->conn;
		}
		function list(){
			$sql = "SELECT * FROM ".$this->table;
			$result = $this->conection->query($sql);
			$this->table = array();
			while ($row = $result-> fetch_assoc()) {
				$this->table[]=$row;
			}
			return $this->table;
		}
		function detail($id){
			$id=$_GET['id'];
			$sql = "SELECT * FROM ".$this->table." WHERE id = ".$id;
			$result = $this->conection->query($sql)->fetch_assoc();
			return $result;
		}
		function destroy($id){
			$id = $_GET['id'];
			$sql = "DELETE FROM ".$this->table." WHERE id = ".$id;
			return $result = $this->conection->query($sql);
		}
		
	}
 ?>