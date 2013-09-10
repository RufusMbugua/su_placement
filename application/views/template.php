<html>
<head>
<?=css('styles.css') ?>
	<link rel="stylesheet" href="<?php echo js_url(); ?>nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo js_url(); ?>nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo js_url(); ?>nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo js_url(); ?>nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo js_url(); ?>nivo-slider/nivo-slider.css" type="text/css" media="screen" />
 	<?=css('bootstrap.css') ?>
 	<?=js('jquery-1.10.2.js'); ?>
 	<?=js('bootstrap.js'); ?>
 	<?=js('nivo-slider/jquery.nivo.slider.js'); ?>
 	
 	
<script>
	$(window).load(function() {
		$('#slider').nivoSlider();
	}); 
</script>
	<title><?php echo $title; ?></title>
</head>
<body>
	<div id="header">
		<div id="nav-header">
			<?=img('logo.jpg') ?>
			<div id="nav-site">
				<ul >
					<li><a href="<?php echo base_url() ?>home">Home</a></li>
 					<li><a href="<?php echo base_url() ?>student">Student</a> </li>
 					<li><a href="<?php echo base_url() ?>employer">Employer</a></li>
					<li><a href="<?php echo base_url() ?>about">About Us</a></li>
  					<li><a href="<?php echo base_url() ?>">Jobs</a></li>
  					<li><a href="<?php echo base_url() ?>">Events</a></li>
   					<li><a href="<?php echo base_url() ?>">Calendar</a></li>
  					<li><a href="<?php echo base_url() ?>contact">Contact Us</a></li>
				</ul>
</div></div>
</div>
<div id="content">
<?php
$this -> load -> view($contentView);
 ?>
</div>
<div id="footer">
   		<div class="aligncenter">Strathmore University Ole Sangale Rd, Madaraka Estate, P.O.Box 59857-00200, Nairobi, Kenya
        <br>
      	<strong>Tel.</strong>: +254 (0) 703 034000/ +254 (0) 703 034 216 &nbsp;<strong>Email:</strong> <a href="mailto:careerservices@strathmore.edu">careerservices@strathmore.edu</a>&nbsp;<strong>Website:</strong> <a href="http://www.strathmore.edu" target="_blank">www.strathmore.edu</a></div>
    

</div>
</body>
</html>
