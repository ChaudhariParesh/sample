<!DOCTYPE html>
<html lang="en">
<head>
<title>Nutrition Xpress</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

 <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

 
   <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?=base_url()?>css/carousel.min.css">
	 <link rel="stylesheet" href="<?=base_url()?>css/theme.min.css"> 
	<link rel="stylesheet" href="<?=base_url()?>css/transitions.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.theme.min.css">
	<link href="<?=base_url()?>css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?=base_url()?>css/style.css" rel="stylesheet">
		<link href="<?=base_url()?>css/responsive.css" rel="stylesheet">
</head>
<body>
<section>
	<nav class="navbar navbar-default nav-parent">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 logo">	
						<a href="<?=base_url()?>"><img src="<?=base_url()?>images/nx_logo.png"></a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 qs-navbar padding-zero">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right nav-list">
								<li><a href="<?=base_url()?>">Home</a></li>
								<li><a href="<?=base_url()?>about">About us</a></li>
								<li><a href="<?=base_url()?>enquiry">Enquiry us</a></li>
								<li class="list-services list-services-a " id="show_menu"><a href="javascript:void(0)">Services<i class="fa fa-chevron-down "></i></a>
									<ul class="list-control-service">
										<!--<li><a href="<?=base_url()?>upload_info">Upload Info</a></li>-->
										<li><a href="<?=base_url()?>search_request">Home Delivery</a></li>         
										<li><a href="<?=base_url()?>diet_plan">Diet Plan</a></li>
										<li><a href="<?=base_url()?>gym_installation">Gym  Installation</a></li>
										<li><a href="<?=base_url()?>retail">Retail Wholesale</a></li>
										<li><a href="<?=base_url()?>consultancy">Consultancy Business </a></li>
									</ul>
								</li>
								<li class="add-registration"><a class="ad-registration" href="<?=base_url()?>contact">Contact Us</a></li>
								<!--	<li><a href="<?=base_url()?>contact">Contact Us</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
</section>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   $(document).ready(function() {
	 $("#show_menu").click(function () {
		$( ".list-control-service" ).toggle();
		});  
  });
</script>