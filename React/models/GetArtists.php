<?php
class GetArtists
{ 
	protected $bdd;

	function  __construct($bdd) 
    { 
    	$this->bdd = $bdd;
    }

    public function selectArtist(){
    	$sql = "SELECT * FROM artists";
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }

    public function getAlbums($idArtists){
    	$sql = "SELECT albums.id, albums.name as 'albumName', albums.cover, albums.cover_small, albums.description as 'albumDesc' FROM albums JOIN artists ON albums.artist_id = artists.id WHERE artists.id =" . $idArtists;
    
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }

} 
?>