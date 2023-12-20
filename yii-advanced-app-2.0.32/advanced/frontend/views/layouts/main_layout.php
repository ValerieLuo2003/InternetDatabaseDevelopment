<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于前台导航栏
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<!--Header-->

	<header>
		<div class="top-bar_sub_w3layouts_agile">
			<h6>
			<i class="fa fa-heart" aria-hidden="true"></i> 和谐世界，反对核污染！
				<a href="../../backend/web" >进入后台 </a>
			</h6>
			<div class="log">
				<div class="collapse navbar-collapse" id="main-nav">
					<ul class="navbar-nav ml-auto">
						<?php

						$menuItems = [
							['label' => '主页', 'url' => ['/site/index']],
						];

						if (Yii::$app->user->isGuest) {
							$menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
							$menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
						} else {
							$menuItems[] = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><span>"
								. Html::beginForm(['/site/logout'], 'post')
								. "<button class='btn btn-outline-secondary'>登出("
								. Yii::$app->user->identity->username . ')'
								. "</button>"
								. Html::endForm()
								. '</span></li>';

						}
						echo Nav::widget([
							'options' => ['class' => 'nav-item'],
							'items' => $menuItems
						]);
						?>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<img src="static2/picture/logo.jpg" width = "75" height = "60"/>
				<a class="navbar-brand" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=site">
			
				核污染
						
						</a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						
					<li class="nav-item">
						<a class="nav-link cool" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=site">主页</a>
						</li>
						<li class="nav-item">
						<a class="nav-link cool" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=site/about">关于团队</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=countriesview">案例研究</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle cool" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								核污染实况
								<i class="fas fa-angle-down"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=news">新闻</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=timeline">时间线</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle cool" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								核污染影响
								<i class="fas fa-angle-down"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=ecological">生态环境</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=economics">社会经济</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=internationalrelation">国际关系</a>
							</div>
						</li>
						<li class="nav-item">
						<a class="nav-link cool" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=comment">网友评论</a>
						</li>
					</ul>
				</div>


				<a class="navbar-brand" href="<?php echo Yii::$app->getHomeUrl(); ?>?r=site">
			
						Nuclear contamination
						
						</a>
			</nav>

		</div>
	</header>
	<!--//header-->

	 <!--Begin:Content-->
	<section id="content" class="table-layout animated fadeIn">
    <?= $content ?>
    </section>
    <!-- End: Content -->

	<!---->
	<!--/model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<div class="signin-form profile">
						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input class="form-control" type="email" name="email" placeholder="E-mail" required="">
									<input class="form-control" type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input class="form-control" type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<div class="login-social-grids">
								<ul class="social_list1">
									<li>
										<a href="#" class="facebook1">
											<i class="fab fa-facebook-f"></i>

										</a>
									</li>
									<li>
										<a href="#" class="twitter2">
											<i class="fab fa-twitter"></i>

										</a>
									</li>
									<li>
										<a href="#" class="dribble3">
											<i class="fab fa-dribbble"></i>
										</a>
									</li>
								</ul>

							</div>
							<p>
								<a href="#" data-toggle="modal" data-target="#exampleModal2"> Don't have an account?</a>
							</p>
						</div>

					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--//model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<div class="signin-form profile">
						<div class="login-m_page">
							<h3 class="sign">Sign Up</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input class="form-control" type="text" name="name" placeholder="Name" required="">
									<input class="form-control" type="email" name="email" placeholder="Email" required="">
									<input class="form-control" type="password" name="password" id="password1" placeholder="Password" required="">
									<input class="form-control" type="password" name="password" id="password2" placeholder="Confirm Password" required="">
									<input class="form-control" type="submit" value="Sign Up">
								</form>
							</div>
							<p>
								<a href="#"> By clicking Sign up, I agree to your terms</a>
							</p>
						</div>


					</div>


				</div>

			</div>
		</div>
	</div>
	<!--//model-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script >
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- required-js-files-->
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items:5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--//required-js-files-->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- Necessary-JS-File-For-Bootstrap -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
