<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于案例研究界面
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Casestudy';
$this->params['breadcrumbs'][] = $this->title;
?>


<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Shape Hover Effect with SVG | Demo 1</title>
		<meta name="description" content="Hover Effects with animated SVG Shapes using Snap.svg">
		<meta name="keywords" content="animated svg, hover effect, grid, svg shape html, ">
		<link rel="stylesheet" type="text/css" href="static1/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="static1/css/demo.css">
		<link rel="stylesheet" type="text/css" href="static1/css/component.css">
		<script src="static1/js/snap.svg-min.js"></script>
	</head>


<body>
	<div class="container">
		
		<header class="jq22-header">
			<h1>案例研究<span>Case Study on Nuclear Contamination</span></h1>	
			
		</header>
		<section id="grid" class="grid clearfix">




		<?php foreach ($Casestudy as $view) : ?>

			<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
				<figure>
					<img src="static1/img/<?=$view->picture?>">
					<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"></path><desc>Created with Snap</desc><defs></defs></svg>
					<figcaption>
						<h2><?= $view->name ?>（<?= $view->country?>）</h2>
						<p><?= $view->casecontent ?></p>
					</figcaption>
				</figure>
			</a>

		<?php endforeach; ?>



		</section>
	</div><!-- /container -->
	<script>
		(function() {

			function init() {
				var speed = 250,
					easing = mina.easeinout;

				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
					var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
						pathConfig = {
							from : path.attr( 'd' ),
							to : el.getAttribute( 'data-path-hover' )
						};

					el.addEventListener( 'mouseenter', function() {
						path.animate( { 'path' : pathConfig.to }, speed, easing );
					} );

					el.addEventListener( 'mouseleave', function() {
						path.animate( { 'path' : pathConfig.from }, speed, easing );
					} );
				} );
			}

			init();

		})();
	</script>
</body>






<!--footer-->
		   <footer>
		<div class="instagram-posts">
			<h3 class="tittle cen foot">保护地球，就是保护我们自己的未来，让绿意蔓延，让生态永续。</h3>
			<h3 class="tittle cen foot">Protecting the Earth is about safeguarding our own future, fostering greenery, and ensuring ecological sustainability.</h3>
			<div class="row footer-top">
				<!-- instagram posts -->
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://zh.wikipedia.org/w/index.php?search=%E6%97%A5%E6%9C%AC%E6%A0%B8%E6%B1%A1%E6%B0%B4&title=Special%3A%E6%90%9C%E7%B4%A2&ns0=1">
						<img src="statics/images/i1.jpeg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://kns.cnki.net/kns8s/defaultresult/index?crossids=YSTT4HG0%2CLSTPFY1C%2CJUP3MUPD%2CMPMFIG1A%2CWQ0UVIAA%2CBLZOG7CK%2CEMRPGLPA%2CPWFIRAGL%2CNLBO1Z6R%2CNN3FJMUV&korder=SU&kw=%E6%A0%B8%E6%B1%A1%E6%9F%93">
					<img src="statics/images/i2.jpeg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://www.zhihu.com/search?type=content&q=%E6%A0%B8%E6%B1%A1%E6%9F%93">
					<img src="statics/images/f2.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://www.youtube.com/results?search_query=%E6%A0%B8%E6%B1%A1%E6%9F%93">
					<img src="statics/images/f4.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://www.bbc.co.uk/search?q=nuclear+contamination&seqId=91234710-9f37-11ee-8eb0-51c49da9aced&d=HOMEPAGE_GNL">
					<img src="statics/images/f5.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://so.news.cn/#search/0/%E6%A0%B8%E6%B1%A1%E6%9F%93/1/">
					<img src="statics/images/i6.jpeg" class="img-fluid" alt="" />
					</a>
				</div>
			</div>

			<div class="col-md-3 agileinfo_footer_grid">
			<h3><p style="color:white">Introduction</p></h3>
				<p >本网站旨在呼吁保护生态环境，通过向大众科普核污染知识，提供地球的核污染现状，回溯历史进行案例分析，从各方面展现核污染的危害，用行动捍卫地球。</span></p>
				<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>


			<div class="col-md-3 agileinfo_footer_grid f3">
				<h3 ><p style="color:white">导航</p></h3>
				<div class="nav-w3-l">
				<ul>
					<li><a href="index.php" >首页</a></li>
					<li><a href="../../backend/web" >登录后台</a></li>
					<li><a href="index.php?r=site/about" >关于团队</a></li>
					<li><a href="index.php?r=casestudy" >案例研究</a></li>
					<li><a href="index.php?r=news" >核污染新闻</a></li>
					<li><a href="index.php?r=timeline" >日本核污水排放时间线</a></li>
					<li><a href="index.php?r=energy" >影响-生态环境</a></li>
					<li><a href="index.php?r=economics" >影响-社会经济</a></li>
					<li><a href="index.php?r=internationalrelation" >影响-国际关系</a></li>
					<li><a href="index.php?r=comment" >各界观点</a></li>
				</ul>
				</div>
			</div>



			<div class="col-md-3 agileinfo_footer_grid f3">
				<h3 ><p style="color:white">相关网站</p></h3>
				<div class="nav-w3-l">
				<ul>
					<li><a href="https://www.wikipedia.org/" >维基百科</a></li>
					<li><a href="https://www.nrc.gov/" >美国核能管理委员会NRC</a></li>
					<li><a href="https://www.iaea.org/" >国际原子能机构IAEA</a></li>
					<li><a href="https://www.youtube.com" >youtube</a></li>
					<li><a href="https://www.bbc.com/" >BBC</a></li>
					<li><a href="https://www.bilibili.com/" >bilibili</a></li>
					<li><a href="https://www.zhihu.com/" >知乎</a></li>
					<li><a href="https://ec.europa.eu/euratom/index_en.htm" >欧洲原子能共同体EURATOM</a></li>
				</ul>
				</div>
			</div>

			<div class="col-md-3 agileinfo_footer_grid">
			<h3><p style="color:white">We are</p></h3>
				<p>互联网数据库开发课程-不想重装队，已经历经所有报错，立志coding时不重装环境！</p>
				<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>

			<div class="footer-bottom-w3layouts-agileinfo">
				<!-- //subscribe -->
				<!-- footer -->
				<div class="footer-cpy text-center">
					<div class="footer-social">
						<div class="copyrighttop">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-pinterest-p"></i>
									</a>
								</li>
							</ul>

						</div>
					</div>
					<div class="copyrightbottom-w3ls-agile">
						<p>Copyright &copy; 2023. NKU-不想重装队 All rights reserved.<a target="_blank" href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment">源代码Github链接</a></p>

					</div>
				</div>
				<!-- //footer -->
			</div>
		</div>
</footer>







