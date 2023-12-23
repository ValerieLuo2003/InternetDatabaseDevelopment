<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于新闻界面
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
$cnt4image = 1;
$cnt4color = 1;
$cnt4loop = 1;
$cnt4label = 1;
?>
<!-- BEGIN: .cover -->
<!-- <?php
  header('content-type:image/jpg;');
  echo "<img alt='aaa' src='static/image/news1.jpg' width='px' height='400px'/>";
?> -->

<!-- <body background="static/image/news1.jpg" style=" background-repeat:no-repeat ;background-size:100% 10%; background-attachment: fixed;">
	。。。。。。
</body> -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WebMag HTML Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
	<body>
		<!-- section -->
		<div class="section">
		
		
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
				<?php $cnt4loop = 1;?>
				<?php foreach ($news as $new) : ?>
					<?php
						if($cnt4loop++ > 2){
							break;
						}
						if($cnt4image > 14) $cnt4image = 1;
					?>
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news000<?=$cnt4image++?>.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<span class="post-date"><?= $new->date ?></span>
								</div>
								<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endforeach; ?>
				</div>
				<!-- /row -->
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Recent Posts</h2>
						</div>
					</div>
					<?php $cnt4loop = 1; ?>
					<?php foreach ($news as $new) : ?>
						<?php
							$cnt4loop++;
							if($cnt4loop < 4){
								continue;
							}
							if($cnt4loop > 9){
								break;
							}
						?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news000<?=$cnt4image++?>.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<?php
										if($cnt4color > 4) {$cnt4color=1;}
									?>
									<a class="post-category cat-<?=$cnt4color++?>" href="<?= $new->url ?>">news<?= $cnt4label++ ?></a>
									<span class="post-date"><?= $new->date ?></span>
								</div>
								<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endforeach; ?>
				</div>
			</div>
			<!-- /container -->
		</div>
		
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>More Recent News</h2>
								</div>
							</div>
							<?php $cnt4loop = 1; ?>
							<?php foreach ($news as $new) : ?>
								<?php if($cnt4loop++<9) continue; 
									if($cnt4image > 13) $cnt4image = 1;
								?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news000<?=$cnt4image++?>.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<?php
												if($cnt4color > 4) {$cnt4color=1;}
											?>
											<a class="post-category cat-<?=$cnt4color++?>" href="category.html">news<?= $cnt4label++ ?></a>
											<span class="post-date"><?= $new->date ?></span>
										</div>
										<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3></div>
								</div>
							</div>
							<!-- /post -->
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!--footer-->





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


	<!---->
		<!-- jQuery Plugins -->
		<script src="statics/js/newsjs/jquery.min.js"></script>
		<script src="statics/js/newsjs/bootstrap.min.js"></script>
		<script src="statics/js/newsjs/main.js"></script>

	</body>
</html>