<?php
#echo "<pre>";var_dump($_SESSION["gid"]);exit();
?>
<ul id="nav">
	<li><span><?php if($_SESSION["gid"] == 0)echo "Admin: "; else echo "User: ";echo $_SESSION["uName"]; ?><span></li>
	<li><span><span></li>
	<li><a href = "<?php echo site_url('welcome/logout'); ?>" >Logout</a></li>
	<li><a href = "<?php echo site_url('home/about'); ?>" >About Us</a></li>
	<li><a href = "<?php echo site_url('home/team'); ?>" >Our Team</a></li>
	<li><a href = "<?php echo site_url('home/maps'); ?>" >JKUAT Places</a></li>
	<li><a href = "<?php echo site_url(''); ?>" >Home</a></li>
</ul>
