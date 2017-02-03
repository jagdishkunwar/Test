<?php
	include_once('_includes/db.php');
	$db = new DB();
	include_once('_includes/header.php');
?>
<?php
	if(isset($_POST['search'])){
		$source = trim($_POST['source']);
		$destination = trim($_POST['destination']);
		$date = trim($_POST['date']);
		$keyword = array($source, $destination, $date);
		foreach($keyword as $key){
			if($key){
				$buses = $db->searchall('busdetail',$key,array('source','destination','date'));
			}
		}
		/*$keyword = "";
		if($keyword == $source){
			if($keyword == $destination){
				if($keyword == $date){
					$buses = $db->searchall('busdetail',$keyword,array('source','destination','date'));
				}
			}
		}*/
		//else{
		//	$search_error="<br/>Sorry there is no bus available.";
		//}
	}
	if(!isset($buses))
		$buses = $db->getall('busdetail');
		//echo "<pre>"; print_r($buses); die;
?>
<?php	
	//if(isset($search_error)) echo $search_error;
?>
<?php 
	if($buses){
		$count=1;
		?>
	   	<table border="2px solid " cellpadding="12px" cellspacing="2px">
			<tr>
				<th>S.N</th>
				<th>Source</th>
				<th>Destination</th>
				<th>Bus Number</th>
				<th>Date</th>
				<th>Time</th>
				<th>Book</th>
			</tr>
			<?php
  				foreach($buses as $bus){
					echo "<tr><td>".$count."</td><td>".$bus['source']."</td><td>".$bus['destination']."</td><td>".$bus['busnum']. "</td><td>".$bus['date']."</td><td>".$bus['time']."</td><td>"."</td><td><a href=\"view_ticket.php?id=".   $bus['id']."\">Book Ticket</a></tr></td>";
						$count++; 
				} 
			?>
		</table>
		<?php
	}
	else{
		echo "sorry! there is no bus available for this route. <br/>";
	}
?>
<a href="display.php">show all</a>
<?php include_once('_includes/middle.php'); ?>
<?php include_once('_includes/footer.php'); ?>