<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Sticky</title>	
		<link rel="stylesheet" href="<?= base_url("inc/css/bootstrap.min.css");?>">	
		<link rel="stylesheet" href="<?=base_url("inc/css/style.css");?>">	
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>	
		<header>			
			<h2>Welcome on Sticky</h2>
			<a href="<?=base_url();?>"><button id="home_link" type="button" class="btn btn-default">Home</button></a>
			<a href="<?= base_url('index.php/sessionForUser');?>"><button id="error_if_no_session" type="button" class="btn btn-default">Go notes</button></a>
			<a href="<?=base_url('index.php/log');?>"><button id="co" type="button" class="btn btn-default">Login</button></a>		
			<a id="link_co" href="<?=base_url('index.php/register');?>"><button id="reg" class="btn btn-default">Register</buton></a>			
		</header>
		