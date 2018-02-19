<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>PROIT technologies</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix" style="background-color:#333333 !important;">
		
		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links hidden-xs">
						<ul>
							<li><a href="https://proittechnologies.com:2096" target="_blank"><i class="icon-email3"></i></a></li>
							<!--<li><a href="login">Login</a>-->
							<?php
							$ci = & get_instance();
							if(isset($ci->session->userdata['logged_in_public'])){
							?>
							<li>
								<span class="ws-nowrap"><i class="icon-logout icons"></i><a href="<?php echo base_url(); ?>public_perfil" id="cerrar"><?php echo $this->session->userdata['logged_in_public']['username']; ?></a></span>
								|
								<span class="ws-nowrap"><i class="icon-logout icons"></i><a href="<?php echo base_url(); ?>logout_public" id="cerrar">Salir</a></span>
							</li>
							<?php
							}else{
							?>
							<li><a href="#"><?php echo $this->lang->line('menu_login_title'); ?></a>
								<div class="top-link-section">
									<form id="top-login" action="login_public" method="post" role="form">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="email" id="username" name="username" class="form-control" placeholder="<?php echo $this->lang->line('menu_login_mail'); ?>" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" id="password" name="password" class="form-control" placeholder="<?php echo $this->lang->line('menu_login_password'); ?>" required="">
										</div>
										<label class="checkbox">
										  <input type="checkbox" value="remember-me"><?php echo $this->lang->line('menu_login_remember'); ?>
										</label>
										<input type="hidden" id="alert_form1" value="<?php echo $this->lang->line('alert_form1'); ?>">
										<input type="hidden" id="alert_form2" value="<?php echo $this->lang->line('alert_form2'); ?>">
										<input type="hidden" id="alert_form3" value="<?php echo $this->lang->line('alert_form3'); ?>">
										<button class="btn btn-info btn-block" type="submit" id="loguear"><?php echo $this->lang->line('menu_login_submit'); ?></button>
									</form>
								</div>
							</li>
							<li>
								<span class="ws-nowrap">
									<div class="error" style="color:red;">
									<?php 
									if(isset($_GET['error'])){
										if($_GET['error'] == '1'){
											echo $this->lang->line('alert_login1');
										}else if($_GET['error'] == '2'){
											echo $this->lang->line('alert_login2');
										}else{
											echo "";
										}
									}
									?>
									</div>
								</span>
							</li>
							<?php
							}
							?>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<!--<div class="col_half fright col_last nobottommargin">

					<div class="top-links">
						<ul>
							<li>
								<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/portuguese';" href="#">
								<?php if($this->session->userdata('site_lang') == 'portuguese') echo '<span style="color:#3DAAD6;">Pt</span>'; 
								else echo '<span>Pt</span>';?>
								</a>
							</li>
							<li>
								<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish';" href="#">
								<?php if($this->session->userdata('site_lang') == 'spanish') echo '<span style="color:#3DAAD6;">Es</span>'; 
								else echo '<span>Es</span>';?>
								</a>
							</li>
							<li>
								<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/english';" href="#">
								<?php if($this->session->userdata('site_lang') == 'english') echo '<span style="color:#3DAAD6;">En</span>'; 
								else echo '<span>En</span>';?>
								</a>
							</li>
						</ul>
					</div>

				</div>-->

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="#" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li id="li_index"><a href="index"><div><?php echo $this->lang->line('link_home'); ?></div><span><?php echo $this->lang->line('link_home_sub'); ?></span></a>
							</li>
							
							<li id="li_proit"><a href="#"><div><?php echo $this->lang->line('link_home_proit'); ?></div><span><?php echo $this->lang->line('link_home_proit_sub'); ?></span></a>
								<ul>
									<li><a href="about_us"><div><?php echo $this->lang->line('link_nosotros'); ?></div></a></li>
									<li><a href="partnerships"><div><?php echo $this->lang->line('link_partnerships'); ?></div></a></li>
								</ul>
							</li>
							<li id="li_smartcities"><a href="smartcities"><div><?php echo $this->lang->line('link_ciudades'); ?></div><span><?php echo $this->lang->line('link_ciudades_sub'); ?></span></a></li>
							<li id="li_smartindustries"><a href="smartindustries"><div><?php echo $this->lang->line('link_smartindustries'); ?></div><span><?php echo $this->lang->line('link_smartindustries_sub'); ?></span></a></li>
							<li id="li_products"><a href="#"><div><?php echo $this->lang->line('link_soluciones'); ?></div><span><?php echo $this->lang->line('link_soluciones_sub'); ?></span></a>
								<ul>
									<li><a href="agriculture"><div><?php echo $this->lang->line('link_agriculture'); ?></div></a></li>
									<li><a href="energyconsumption"><div><?php echo $this->lang->line('link_energia'); ?></div></a></li>
									<li><a href="greenspaces"><div><?php echo $this->lang->line('link_greenspaces'); ?></div></a></li>
									<li><a href="wastlecollection"><div><?php echo $this->lang->line('link_wastlecollection'); ?></div></a></li>
									
									<!--
									
									<li><a href="#"><div><?php echo $this->lang->line('link_fleetmanagement'); ?></div>
</a></li>								
									<li><a href="#"><div><?php echo $this->lang->line('link_citizeninterface'); ?></div></a></li>
									
									<li><a href="#"><div><?php echo $this->lang->line('link_cargomanagement'); ?></div></a></li>
									<li><a href="#"><div><?php echo $this->lang->line('link_aquaculture'); ?></div></a></li>
									<li><a href="#"><div><?php echo $this->lang->line('link_products'); ?></div></a></li>
									-->
								</ul>
							</li>
							<li id="li_contact">
								<a href="contacto"><div><?php echo $this->lang->line('link_contactos'); ?></div><span><?php echo $this->lang->line('link_contactos_sub'); ?></span></a>
							</li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<?php
		// Carga de páginas
		require_once($pagina);
		?>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="<?php echo assets_url(); ?>images/footer-logo.png" alt="" class="footer-logo">
						<?php echo $this->lang->line('rights_message'); ?>
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="index"><?php echo $this->lang->line('link_home_footer'); ?></a>/<a href="smartcities"><?php echo $this->lang->line('link_mercado_footer'); ?></a>/<a href="smartindustries"><?php echo $this->lang->line('link_soluciones_footer'); ?></a>/<a href="contacto"><?php echo $this->lang->line('link_contact_footer'); ?></a>
						</div>
						<br>
						<div class="fright clearfix col_last">
							<a href="https://www.facebook.com/proittechnologies/" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
								<input type="text" id="section" value="<?php echo $section;?>">
							</a>

							<!--<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>-->

							<a href="https://www.linkedin.com/company-beta/24459869/" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/functions.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
			$( ".tab-linker" ).click(function() {
				$( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
				return false;
			});
		});
	</script>

	
	<!-- Google Maps
	============================================= -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.gmap.js"></script>

	<script type="text/javascript">
		
		// Función para validar formulario de logueo
		$(document).ready(function () {
			$("#loguear").click(function (e) {
				e.preventDefault();  // Para evitar que se envíe por defecto
				// Expresion regular para validar el correo
				var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
				
				if ($('#username').val().trim() == "") {
          
				   //~ swal("Disculpe,", "para continuar debe ingresar el nombre de usuario");
				   //~ $('#username').parent('div').addClass('has-error');
				   //~ $('#username').focus();
				   alert($("#alert_form1").val());
				   
				} else if (!(regex.test($('#username').val().trim()))){
					
					//~ swal("Disculpe,", "el usuario debe ser una dirección de correo electrónico válida");
					//~ $('#username').parent('div').addClass('has-error');
					alert($("#alert_form2").val());
					
				} else if ($('#password').val().trim() === "") {
				  
				   //~ swal("Disculpe,", "para continuar debe ingresar una contraseña");
				   //~ $('#password').parent('div').addClass('has-error');
				   alert($("#alert_form3").val());
				   
				} else {
					//~ alert($('#username').val().trim());
					//~ alert($('#password').val().trim());
					// Enviamos el formulario
					$('#top-login').submit();
				}
			});
			
			$("#video1, #video2").css('display','block');
			$(".video-placeholder").hide();
			$(".video-placeholder").css('display','none');
		});
		
		// Marcar la sección actual
		if($("#section").val() == "index"){
			$("#li_index").addClass('current');
		}else if($("#section").val() == "proit"){
			$("#li_proit").addClass('current');
		}else if($("#section").val() == "smartcities"){
			$("#li_smartcities").addClass('current');
		}else if($("#section").val() == "smartindustries"){
			$("#li_smartindustries").addClass('current');
		}else if($("#section").val() == "products"){
			$("#li_products").addClass('current');
		}else if($("#section").val() == "contact"){
			$("#li_contact").addClass('current');
		}
		
		
		$('#google-map').gMap({

			latitude: 26.010593,
			longitude: -80.185812,
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					latitude: 26.010593,
					longitude: -80.185812,
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "<?php echo assets_url(); ?>images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [13,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}


		});



	</script>
	
	<!--<script>
		var video1 = document.getElementById('video1');
		video1.addEventListener('click',function(){
		  video1.play();
		},false);
		
		var video2 = document.getElementById('video2');
		video2.addEventListener('click',function(){
		  video2.play();
		},false);
	</script>-->

</body>
</html>
