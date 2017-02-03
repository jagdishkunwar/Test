<?php
include_once('_includes/db.php');

$db = new DB();
if(isset($_POST['submit'])){
	$from = $_POST['from'];
	$to  = $_POST['to'];
	$BusNum = $_POST['BusNum'];
	$date = $_POST['date'];
	$time =  $_POST['time'];

	$new_data= array(
						'source' => $from ,
						'destination' => $to ,
						'busnum' => $BusNum,
						'date' => $date,
						'time' => $time
					);
		$insert = $db->insertinto('busdetail',$new_data);
		$result = mysql_query($insert);
		//header('Location: display.php');
		echo "Data inserted successfully";
}
?>
<?php include_once('_includes/header.php'); ?>
	<div class="maindiv">
		<form method="post" action="">
			<table class="addtbl" border="2px solid #222" cellpadding="10px" cellspacing="10px">
				<tr>
					<td>From: </td>
					<td><input type="text" name="from" placeholder="From" value="<?php if(isset($_POST['from'])) echo $from; ?>" class="mystyle" required/></td>
				</tr><br/>
				<tr>
					<td>To: </td>
					<td><input type="text" name="to" placeholder="To" value="<?php if(isset($_POST['to'])) echo $to; ?>" class="mystyle" required/></td>
				</tr><br/>
				<tr>
					<td>Bus Number: </td>
					<td><input type="text" name="BusNum" placeholder="Bus Number" value="<?php if( isset($_POST['BusNum'])) echo $BusNum; ?>" class="mystyle" required/></td>
				</tr><br/>
				<tr>
					<td>Date: </td>
					<td><input type="date" name="date" placeholder="yy/mm/dd" class="mystyle" required></td>
				</tr><br/>
				<tr>
					<td>Departure Time </td>
					<td><input type="text" name="time" value="<?php if(isset($_POST['time'])) echo $time; ?>" class="mystyle" required></td>
				</tr><br/>
				<tr>
					<td><input type="submit" name="submit" value="submit" /></td>
				</tr><br/>
			</table>
		</form>
	</div>
</body>
</html>