

		<div id="container">
			<h1>Pro-Finder:: List of Experts</h1>

			<div id="body">
				<p>Pro-Finder recommends to you the following experts who matches your field of interest.</p>
<?php 
	foreach ($pros as $pros_item)
	{
		echo '
		<code>
		<div><div id='.$pros_item['id'].' class = "dropbtn">Delete  This Pro</div>
			<h2>' . $pros_item['title'] . '. ' . $pros_item['surname'] . ' ' . $pros_item['firstname'] . ' ' . $pros_item['othername'] . '</h2>
			<table width = "100%">
				<tr>
					<td>
						AGE: ' . $pros_item['age'] . ' Yrs.<br/>
						Office: ' . $pros_item['office'] . '.<br/>
						Specialization: ' . $pros_item['specialization'] . '.<br/>
						Availability: ' . $pros_item['availability'] . ' in the office.<br/>
						Contact: ' . $pros_item['contact'] . '<br/>
						Email: ' . $pros_item['email'] . '<br/>
						Gender: ' . $pros_item['gender'] . '.
					</td>
					<td>
						<img src = " ' . base_url('armory/photos/') . '/' . $pros_item['image'] . ' " width = "150px" height = "165px" 
						alt = "Photo of  ' . $pros_item['title'] . '. ' . $pros_item['surname'] . ' ' . $pros_item['firstname'] . ' "
						style = "float: right; border: 1px solid #1111FF; " title = "Her">
					</td>
				</tr>
			</table>
		</div>
		</code>
		';
	}
?>		
				<p><a href="">Share Pro-Finder with a friend!</a></p>
			</div>

			<p class="footer">&copy;<strong> Pro-Finder 2016. </strong></p>
		</div>
	<script src="<?php echo base_url('armory/scripts/script.js');?>"></script>
	</body>
</html>