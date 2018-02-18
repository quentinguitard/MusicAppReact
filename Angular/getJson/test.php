<?php 
require_once('../db.php');  
header('Content-Type: application/json');
$sql = "SELECT count(*) as count FROM albums";
$result = $bdd->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$count = $row['count'];
$total_pages = ceil($count / 10);  /*
if(!empty($total_pages))
{
	for($i=1; $i<=$total_pages; $i++)
	{ 
		if($i == 1):?>
	        <li class='active'  id="<?php echo $i;?>"><a href='pagination/film/pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
		<?php
		else:?>
			<li id="<?php echo $i;?>"><a href='pagination/film/pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
		<?php
		endif;?>			
	<?php
	} 
}*/
$tab = [];
for ($i = 0; $i <= $total_pages; $i++)
{
	array_push($tab, $i);
}
$myData = array('total_pages' => $tab);
echo json_encode($myData);
?>