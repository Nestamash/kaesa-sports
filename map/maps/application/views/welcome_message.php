

<div id="container">
	<h1>Welcome to JKUAT Online Orientation System</h1>

	<div id="body">
		<p>Login here to start.</p>

		<p>New to JKUAT? We will make you familiar with JKUAT.</p>

		<code>
			<?php echo form_open('welcome/index'); ?>
					<?php echo form_error('username'); ?>
				<label for = 'username'>Email:&nbsp;&nbsp;&nbsp;</label>
				<input type = "text" name = "username" value="<?php echo set_value('username'); ?>"> 
				<br/>&nbsp;<br/>

				<?php echo form_error('password'); ?>
				<label for = 'password'>Password:</label>
				<input type = "password" name = "password">
				<br/>&nbsp;<br/>
				<input id = " " type = "submit" value = "Login" name = "login">
				<input id = " " type = "reset" value = "Cancel" name = "cancel">
			</form>
		</code>

		<!--<p>Did you forget your pasword? <a href="">Yes!</a></p>-->
		<p>Are you a first timer? <a href="<?php echo site_url('auth/register');?>">Create Account!</a></p>


	</div>

	<p class = "footer">&copy;<strong> Online Orientation 2016. </strong></p>
</div>

</body>
</html>
