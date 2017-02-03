<?php 
	include_once('_includes/db.php');
	$db=new DB();
?>
<html>
<head>
	<title>Bus reservation</title>
</head>
<body>
<?php
if(isset($_GET['id'])){
	$post_id = $_GET['id'];
	$post=$db->getone('busdetail',array('id'=>$post_id));
	if($post){
		echo "<h1>Bus Information</h1>";
		echo "<br>From ".$from;
		echo "<br>To ".$to;
		echo "<br>Bus Number ".$BusNum;
		echo "<br>Date ".$date;
		echo "<br>Time ".$time;
	}
	else
	{
		echo "sorry! post info not found";
	}
}
?>
</body>
</html>

