<?php
	include_once('_includes/header.php');
?>
<div id="body">
	<div class="c3lear"></div>
	<section> 
		<div id="image">
			<img src="#">
		</div>
	</section>
	<aside>
		<form id="form" action="display.php" method="post">
			<font size="6px">Online Bus Booking </font><br/><br/>
			
			<label for="from">From</label><br/>
			<input type="text" name="source" placeholder="Source" class="mystyle" required><br/><br/>
		
			<label for="to">To</label><br/>
			<input type="text" name="destination" placeholder="Destination" class="mystyle" required><br/><br/>
		
			<label for="destination">Departing</label><br/>
			<input type="date" name="date" placeholder="mm/dd/yyyy" class="mystyle" required/><br/><br/>
	
			<input type="submit" name="search" value="search" id="search">
		</form>
	</aside>		
</div>
<?php include_once('_includes/middle.php'); ?>
<?php include_once('_includes/footer.php'); ?>