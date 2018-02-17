<?php
class GetAlbums
{ 
	public function getList($bdd)
	{
		if($reponse = $bdd->query("SELECT * FROM albums"))
		{
			if( $row = $reponse->fetchall(PDO::FETCH_CLASS, "albums"))
		 		return json_encode($row);
		}
	}
	public function getDetail($bdd,$id)
	{
		$numberTrack;
		try {
			$reponse = $bdd->prepare("SELECT tracks.track_no as \"Number\", genres.name as \"Genre\",tracks.name as \"Name\" , albums.cover_small as \"Cover\",albums.popularity as \"Popularity\",albums.release_date \"Release date\" FROM albums left join tracks on albums.id = tracks.album_id left join genres_albums on genres_albums.album_id = albums.id left join genres on genres.id = genres_albums.genre_id where albums.id = :id");			
			if($reponse->execute(array('id' => $id)))
			{
				if($row = $reponse->fetchAll(PDO::FETCH_CLASS, "albums")) {
					return json_encode($row);
				}
			}
		}
		catch (Exception $e)
		{
		    die('Erreur : ' . $e->getMessage());
		}
	}
} 
?>