<?php 
	require_once('BaseClientController.php');
	require_once('controllers/admin/SingerController.php');
	require_once('controllers/admin/PostController.php');
	require_once('controllers/admin/ArticleController.php');
	class ClientController extends BaseClientController
	{
		
		var $model;
		var $modelSin;
		var $modelPo;
		var $modelArt;
		function __construct(){
			$this->modelSin = new Singer();
			$this->modelPo = new Post();
			$this->modelArt = new Article();
		}
		function client(){
			$allMusic = $this->modelSin->list();
			$arMusic = $this->modelSin->listTop(8,'DESC');
			$topMusic = $this->modelPo->findPostSingerById(20,'view','>=');
			$popMusic = $this->modelPo->findPostSingerById(1,'category_id','=');
			$danceMusic = $this->modelPo->findPostSingerById(3,'category_id','=');
			$RnBMusic = $this->modelPo->findPostSingerById(5,'category_id','=');
			$article = $this->modelArt->findArt(2);
			require_once('views/Client/clientIndex.php');
		}
		function release(){
			$id = $_GET['id'];
			$sumView = $this->modelPo->sum($id,'view');
			$countMs = $this->modelPo->count($id,'music');
			$post = $this->modelPo->findPostSingerById($id,'singer_id','=');
			$singer = $this->modelSin->detail($id);
			$exceptArtist = $this->modelSin->exceptArtist($id,4);
			require_once('views/Client/release.php');
		}
		function releases(){
			$article = $this->modelArt->findArt(2);
			$allMusic = $this->modelSin->list();
			$topMusic = $this->modelPo->findPostSingerById(20,'view','>=');
			require_once ('views/Client/releases.php');
		}
		function artist(){
			$id = $_GET['id'];
			$article = $this->modelArt->findArt(2);
			$singer = $this->modelSin->detail($id);
			$exceptArtist = $this->modelSin->exceptArtist($id,5);
			require_once('views/Client/artist.php');
		}
		function artists(){
			$article = $this->modelArt->findArt(2);
			$allMusic = $this->modelSin->list();
			require_once('views/Client/artists.php');
		}
		function article(){
			$id=$_GET['id'];
			$article = $this->modelArt->detail($id);
			require_once('views/Client/article.php');
		}
	}
 ?>