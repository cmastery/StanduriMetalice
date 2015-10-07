<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>{titlu}</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
	.light-blue > h6{
		color:#FFF !important;
	}
	.prefata p{
		font-size:18px !Important;
	}
	
      #map {
        width: 600px;
        height:350px;
      }
	 
	 .motto{
		margin-left: 24px;
		margin-top:160px !important;
		margin-bottom:0px;
		display:inline-block;
		font-size:24px;
	 }
	 .mottoSmall{
		font-size:24px;
	 }
	 .logo{
		 position:absolute;
		 margin-left:20px !important;
	 }
	</style>
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
			</span class="logo">
				<img src="<?php echo base_url(); ?>/assets/img/logo.png" class="responsive-img"/>
			</span>
			<span class="hide-on-large-only">
				<br> <i>{deviza}</i>
			</span>
			<span class="motto hide-on-med-and-down">
				<i>{deviza}</i>
			</span>
		</div>
	</div>