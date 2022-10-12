<?php 
	$SiteName = 'I&lsquo;m Designer Users';
	$UserName = 'I&lsquo;m Designer Users'; 
?>
<?php // echo $base_url = 'http://'.$_SERVER['HTTP_HOST'].'/html/portfolio/light-html/'; ?>
<?php
function base_url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/html/portfolio/light-html/';
}

base_url();

// echo base_url();

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $PageTitle; echo $PageBlock; echo $UserName; ?></title>

        <link rel="icon" href="media/images/favicon/logo-blue.png" />
        <link rel="icon" href="media/images/favicon/logo-green.png" />
        <link rel="icon" href="media/images/favicon/logo-orange.png" />
        <!-- <link rel="icon" href="media/images/favicon-192x192.png" />-->
        <!-- <link rel="apple-touch-icon" href="media/images/favicon-180x180.png" />-->

		<link rel="stylesheet" href="<?php echo base_url().'css/all-fontawesome.min.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/aos.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/owl.carousel.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/owl.carousel.min.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/owl.theme.default.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/fancybox.4.0.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/style.css' ?>" />
		<link rel="stylesheet" href="<?php echo base_url().'css/responsive.css' ?>" />

	</head>

	<body>

        <!-- ************************************************ Header Start ************************************************ -->
        
		<header class="">
			<div class="nav_sticky">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo_brand img_loading_main" href="<?php echo base_url(); ?>" title="<?php echo $SiteName ?>">
                        	<div class="img_loading"></div>
                            <span class="logo_text"><?php echo $UserName ?></span>
                            <!-- <span class="logo_img">
								<img src="" alt="" class="img-fluid">
							</span> -->
                        </a>
						<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
							data-bs-target="#nav_menu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar_icon icon_bar"></span>
							<span class="navbar_icon icon_bar2"></span>
							<span class="navbar_icon icon_bar3"></span>
						</button>
						<div class="navbar-collapse collapse" id="nav_menu">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a class="nav-link <?php if($active=='index') echo 'active'; ?>" <?php if($active=='index') echo 'aria-current="page"'; ?> href="<?php echo base_url(); ?>">
										<span class="menu_text">Home</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if($active=='about-us') echo 'active'; ?>" <?php if($active=='about-us') echo 'aria-current="page"'; ?> href="javascript:void(0)">
										<span class="menu_text">About</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if($active=='portfolio') echo 'active'; ?>" <?php if($active=='portfolio') echo 'aria-current="page"'; ?> href="javascript:void(0)">
										<span class="menu_text">Portfolio</span>
									</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="javascript:void(0)">
										<span class="menu_text">Service</span>
									</a>
								</li> -->
                                <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button"
										aria-expanded="false">Services</a>
									<ul class="dropdown-menu">
										<li class="dropdown-item">
											<a class="nav-link" href="javascript:void(0)">Design</a>
										</li>
										<li class="dropdown-item">
											<a class="nav-link" href="javascript:void(0)">Development</a>
										</li>
										<li class="dropdown-item">
											<a class="nav-link" href="javascript:void(0)">Digital Marketing</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if($active=='contact-us') echo 'active'; ?>" <?php if($active=='contact-us') echo 'aria-current="page"'; ?> href="javascript:void(0)">
										<span class="menu_text">Contact</span>
									</a>
								</li>
							</ul>
							<div class="mode_box">
								<label for="mode" class="mode_switch">
									<input type="checkbox" id="mode" title="Moon">
									<span class="mode_slider img_loading_main" title="Sunny">
										<div class="img_loading"></div>
									</span>
								</label>
							</div>
							<div class="common_btn_box mt-0">
								<a href="<?php echo base_url().'media/pdf/html5-tag-list.pdf' ?>" class="btn common_btn navbar-text rd_btn" download="<?php echo $UserName ?> CV">
									<span class="rd_text">Resume</span>
									<span class="common_icon rd_icon">
										<i class="fas fa-download common_top"></i>
									</span>
								</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
		
        <!-- ************************************************ Header End ************************************************ -->
        
        <!-- ************************************************ Conent Start ************************************************ -->
