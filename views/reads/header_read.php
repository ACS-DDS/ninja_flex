<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Sticky</title>
		<link rel="stylesheet" href="<?= base_url("inc/css/bootstrap.min.css");?>">		
		<link rel="stylesheet" href="<?=base_url("inc/css/style.css");?>">
<!-- 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>	
		<header>
			<a href="<?=isset($_SESSION['client']) == true ? base_url('index.php/sessionForUser') : base_url('index.php/log');?>"><button id="error_if_no_session" type="button" class="btn btn-default">Sticky</button></a>
		</header>