<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>sticky</title>
		<link rel="stylesheet" href="<?= base_url("inc/css/bootstrap.min.css");?>">		
		<link rel="stylesheet" href="<?=base_url("inc/css/style.css");?>">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>		
	</head>
	<body>	
		<header id="header_achievo">
			<a href="<?=base_url();?>"><button id="home_link" type="button" class="btn btn-default">Home</button></a>
			<aside class="co_lo" >
				<form action="" method="POST">				
					<article id="connected" class="btn btn-default">
						<span class="lolilol"></span>
						<?='Signed in as '. $_SESSION['client'];?>						
					</article>
					<input id="logout_achievo" class="btn btn-default" type="submit" name="deco" value="Logout" />	
				</form>					
			</aside>
			<h2 id="m_sucss">Notes</h2>
			<?php
			echo '<article class="create_lol"><h3 id="create_create"><button id="create_link" href="" class="btn btn-default">+</button> Add your sticky note.</h3></article>';
		?>				
		</header>