<?php
class GetArtists
{ 
	protected $bdd;

	function  __construct($bdd) 
    { 
    	$this->bdd = $bdd;
    }

    public function selectArtist($artists = ""){
    	$sql = "SELECT * FROM artists WHERE name LIKE '%".$artists."%'";
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }

    public function getAlbums($idArtists){
    	$sql = "SELECT * FROM albums JOIN artists ON albums.artist_id = artists.id WHERE artists.id =" . $idArtists;
    	var_dump($sql);
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }

} 
?>