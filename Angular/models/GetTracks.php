<?php
class GetTracks
{ 
	protected $bdd;

	function  __construct($bdd) 
    { 
    	$this->bdd = $bdd;
    }

    public function getTracks($idAlbum,$idTrack){
    	$sql = "SELECT * FROM tracks JOIN albums ON albums.id = tracks.album_id WHERE albums.id = ". $idAlbum." AND tracks.track_no = ".$idTrack;
    	$stmt = $this->bdd->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;

    }

}
?>