<?php
class GetArtists
{ 
	protected $bdd;

	function  __construct($bdd) 
    { 
    	$this->bdd = $bdd;
    }

    public function selectArtist($artists = "",$offset,$pageSize){
    	$sql = "SELECT * FROM artists WHERE name LIKE '%".$artists."%' LIMIT $offset,$pageSize";
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }

    public function getAlbums($idArtists){
    	$sql = "SELECT * FROM albums JOIN artists ON albums.artist_id = artists.id WHERE artists.id =" . $idArtists;
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }

} 
?>