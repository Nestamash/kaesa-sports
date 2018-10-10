

		<div id="container">

			<div id="body">

				<p>Print a report of the people registered between the dates you give below.</p>

				<code>					
					<?php echo form_open('welcome/report'); ?>

						<table>
							<tr>
								<td><label for = "from">From (YY-MM-DD):</label></td>
								<td>
									<?php echo form_error('from'); ?>
									<input class = "reags_textbox" type = "text" name = "from">
								</td>
							</tr>
							<tr>
								<td><br/>&nbsp;<br/></td>
							</tr>
							<tr>
								<td><label for = "to">To (YY-MM-DD):</label></td>
								<td>
									<?php echo form_error('to'); ?>
									<input class = "reags_textbox" type = "text" name = "to" />
								</td>
							</tr>
							<tr>
								<td><br/>&nbsp;</td>
							</tr>
							<tr>
								<td colspan = "2">
									<input class = "reags_buttons" type = "submit" value = "Find Users" name = "find">
								</td>
							</tr>
						</table>
						
					</form>
				</code>

				<p><a href = "">Share Pro-Finder with a friend!</a></p>
			</div>

			<p class = "footer">&copy;<strong> Pro-Finder 2016. </strong></p>
		</div>

	</body>
</html>