<p>users registered between <?php echo $_POST["from"];?> and <?php echo $_POST["to"];?>.</p>
<?php
	echo '
	<code>
	<table width = "100%">
	<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email </td>
		<td>Gender </td>
		<td>Contact</td>
		<td>Registration Date</td>
	</tr>
	';
	foreach ($users as $pros_item)
	{
		echo '
				<tr>
					<td>
						' . $pros_item['FirstName'].'
					</td>
					<td>
						' . $pros_item['LastName'].'
					</td>
					<td>
						' . $pros_item['Email'].'
					</td>
					<td>
						' . $pros_item['Gender'].'
					</td>
					<td>
						' . $pros_item['Contact'].'
					</td>
					<td>
						' . $pros_item['RegDate'].'
					</td>
				</tr>
		
		';
	}
	echo '</table>
	</code>';
?>		
<a href = "http://localhost/pro-finder/index.php/welcome/report">Back</a>
<script>window.print();</script>