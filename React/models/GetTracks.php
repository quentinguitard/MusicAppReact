<?php
class GetTracks
{ 
	protected $bdd;

	function  __construct($bdd) 
    { 
    	$this->bdd = $bdd;
    }

    public function getTracks($idAlbum){
    	$sql = "SELECT tracks.id as 'id', tracks.name, tracks.track_no as 'track_no', tracks.duration, tracks.mp3, albums.name as 'album_name'  FROM tracks JOIN albums ON albums.id = tracks.album_id WHERE albums.id = ". $idAlbum;
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;

    }

}
?>