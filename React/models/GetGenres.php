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
    	$stmt = $this->query($sql);
    	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$json = json_encode($row);
    	return $json;
    }
}
?>