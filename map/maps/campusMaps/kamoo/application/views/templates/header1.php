<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Campus Maps</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('armory/stylez/default.css');?>">
	<script src="<?php echo base_url('armory/scripts/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('armory/scripts/placeloader.js');?>"></script>
	<script src="<?php echo base_url('armory/scripts/findway.js');?>"></script>
	<script src="http://maps.google.com/maps/api/js?v=3&key=AIzaSyB1fuJIdkyICFh3QLREPf3WGaXX4dW3708" type="text/javascript"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	</style>
</head>
<body>
