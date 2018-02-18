<?php
class GetGenres
{ 
	protected $bdd;
	function  __construct($bdd) 
    {
    	$this->bdd = $bdd;
    }
    public function getGenre(){
    	$sql = "SELECT * FROM genres";
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }
    public function getDetailGenre($idGenre,$offset,$pageSize){
        $sql = "SELECT albums.* FROM `albums` left join genres_albums on genres_albums.album_id = albums.id where genres_albums.genre_id = $idGenre LIMIT $offset,$pageSize";
        $stmt = $this->bdd->query($sql);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($row);
        return $json;
    }
}
?>