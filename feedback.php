<?php
	include_once('_includes/header.php');
?>
	<form id="feedback" style="float:right;margin-right:50px;">
		<table>	
			<tr><td><label for="feeback">I want to give feedback on </label></td><td>
			<select class="mystyle">
				<option>Bus booking</option>
				<option>Cab booking</option>
				<option>Hotel booking</option>
				<option>Ticket cancellation</option>
			</select></td></tr><br/><br/>
			<tr><td>Name :* </td><td><input type="text" name="name" palcehokder="Enter your name please" required class="mystyle"></td></tr><br/><br/>
			<tr><td>Mobile Number :* </td><td><input type="text" name="mobile" palcehokder="Enter phone number please" required class="mystyle"></td></tr><br/><br/>
			<tr><td>Email :* </td><td><input type="email" name="email" palcehokder="Email" required class="mystyle"></td></tr><br/><br/>
			<tr><td>Feedback : </td><td><input type="text" name="feedback" palcehokder="Feedback" required class="mystyle"></td></tr><br/><br/>
		
			<tr><td><input type="submit" name="submit" style="padding:5px 5px;"></td></tr>
		</table>
	</form>
	<?php include_once('_includes/middle.php'); ?>
	<?php include_once('_includes/footer.php'); ?>