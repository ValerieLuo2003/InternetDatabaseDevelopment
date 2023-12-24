<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于前台主页
 */
/* @var $this \yii\web\View */
/* @var $content string */

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
	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Nuclear contamination </h3>
						<h5>2023
							<span>核污染</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Nuclear contamination </h3>
						<h5>2023
							<span>核污染</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Nuclear contamination</h3>
						<h5>2023
							<span>核污染</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Nuclear contamination</h3>
						<h5>2023
							<span>核污染</span>
						</h5>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!--//banner-->
	<!--/banner-bottom-w3ls-agileinfo-->
	<section class="banner-bottom-w3ls-agileinfo">
		<div class="container">


		<h1 style="font-family: 华文新魏;"><b>核污染</b></h1>
		<h1 style="font-family: 华文新魏;"></h1>

      <div class="about-top w3ls-agile">
        <div class="col-md-6 red">


		<div id="butong_net_left" style="overflow:hidden;width:500px;">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr><td id="butong_net_left1" valign="top" align="center">
			<table cellpadding="2" cellspacing="0" border="0">
			<tr align="center">
				<td><img src="statics/images/map.jpg"></td>
			</tr>
			</table>
				</td>
					<td id="butong_net_left2" valign="top"></td>
				</tr>
			</table>
		</div>
		<script>
			var speed=18//速度数值越大速度越慢
			butong_net_left2.innerHTML=butong_net_left1.innerHTML
			function Marquee3(){
				if(butong_net_left2.offsetWidth-butong_net_left.scrollLeft<=0)
					butong_net_left.scrollLeft-=butong_net_left1.offsetWidth
				else{
					butong_net_left.scrollLeft++
				}
			}
			var MyMar3=setInterval(Marquee3,speed)
			butong_net_left.onmouseover=function() {clearInterval(MyMar3)}
			butong_net_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}
		</script>


        </div>
        <div class="col-md-6 come">
            <h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;2021年4月13日，日本政府正式决定将福岛核污染水经过滤并稀释后排放入海。</p></h4>

			<h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;2022年7月22日，日本原子能规制委员会正式批准了东京电力公司有关福岛第一核电站事故后的核污染水排海计划。 </p></h4>


			<h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;2022年8月4日，日本东京电力公司称，将福岛第一核电站储存的含有氚等放射性物质的核污染水排入大海的排海设施工程，已于今日正式开始施工。2023年6月26日，日本东京电力公司称，用于排放福岛第一核电站核污染水的海底隧道建设工程已全部完工。2023年8月22日，日本政府举行相关阁僚会议后宣布，将从8月24日启动福岛核污染水排海。根据计划，福岛核污染水的排海至少要持续30年。</p></h4>
			<p><a href="https://www.baidu.com/s?tn=news&rtt=1&bsst=1&wd=%E6%A0%B8%E6%B1%A1%E6%9F%93&cl=2"
                                          class="more">>> 了解更多</a></p>
          
        </div>
        <div class="clearfix"> </div>
      </div>

	  <div class="featured-items banner-bottom-w3ls-agileinfo">
			<div class="row jewel-grids-main-in">
				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="fa fa-home"></span>
						<!-- fa fa-handshake-o -->
					</div>
					<h4 class="sub-tittle">主要成因</h4>
					<p> <b>科技发展与核事故：</b>技术事故、人为疏忽或设备故障可能导致放射性物质的泄漏。历史上最为著名的核事故之一是1986年的切尔诺贝利核事故，这一事故不仅导致巨大的人道主义灾难，也在全球范围内引起了对核安全的广泛担忧。&emsp;</p>
					<p> <b>核武器测试与环境影响：</b>冷战时期，多个国家进行了大规模的核武器测试，释放了大量的放射性物质。这些物质不仅对地下水、土壤和大气产生直接影响，还通过食物链进入人类体内。</p>
					<p> <b>核废料处理与长期储存：</b>核废料中包含着高度放射性的物质，其不当处理可能导致环境的污染。许多国家面临着核废料处理和长期储存的难题。</p>
					<p> <b>国际政治与核军备竞赛：</b>冷战时期，美国和苏联等大国进行了大规模的核军备竞赛，导致大量的核武器制造和测试。这不仅增加了核事故的风险，还在全球范围内产生了放射性物质的扩散。</p>
					<p><a href="https://baike.baidu.com/item/%E6%A0%B8%E6%B1%A1%E6%9F%93/3075835?fr=ge_ala"
									class="more">>> more</a></p>
				</div>


				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="far fa-life-ring"></span>
						<!-- fa fa-handshake-o -->
					</div>
					<h4 class="sub-tittle">国际局势</h4>
					<p> <b>核裁军和防扩散努力：</b>国际社会一直在努力推动核武器的裁军和防止核扩散。多边协议和条约，如《不扩散核武器条约》（NPT）和《全面禁止核试验条约》（CTBT），旨在限制核武器的扩散和发展。</p>
					<p> <b>国际核安全标准：</b>国际社会通过建立共同的核安全标准来确保核能的平和利用。</p>
					<p> <b>核事故与国际协助：</b>切尔诺贝利核事故和福岛核事故等事件凸显了在核灾难面前，国际社会需要共同努力应对。合作包括信息共享、技术援助、人员培训等方面，以最大程度地减轻事故对环境和人类健康的影响。</p>
					<p> <b>新兴核国家和技术风险：</b>随着新兴国家对核能的兴趣增加，国际社会关注这些国家如何管理核技术的安全性。</p>
					<p> <b>气候变化和清洁能源转型：</b>国际上的核能发展和清洁能源政策之争也影响着核污染的国际局势。</p>
					<p><a href="https://www.baidu.com/s?tn=news&rtt=1&bsst=1&wd=%E6%A0%B8%E6%B1%A1%E6%9F%93%E6%96%B0%E9%97%BB&cl=2"
									class="more">>> more</a></p>
				</div>


				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="fa fa-map"></span>
					</div>
						<h4 class="sub-tittle">后续影响</h4>
						<p> <b>海洋生态系统破坏：</b>海洋生态系统破坏：核污染物如放射性同位素可能对海洋生物和海洋生态系统造成损害。</p>
						<p> <b>污染海洋食品链：</b>通过核污染排入海洋的物质可能会被海洋生物吸收并蓄积在其组织中。</p>
						<p> <b>损害人类健康：</b>核污染物若进入食物链，最终被人类摄取，则可能对人的健康造成潜在的危害。</p>
						<p> <b>影响渔业资源和经济：</b>核污染排海可能对渔业资源产生负面影响，如对渔场和渔业生产区域造成破坏，影响渔业产量和质量。</p>
						<p> <b>跨国影响：</b>核污染排海不仅对排放国的周边海域造成威胁，而且还可能通过海洋洋流和水循环传播到其他地区。这可能导致跨国辐射污染，对全球的海洋环境和生态系统产生长期影响。</p>
						<p><a href="https://baijiahao.baidu.com/s?id=1775139412389422317&wfr=spider&for=pc"
										class="more">>> more</a></p>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>










    <div class="site-section overflow-hidden pb-0 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!--
                      You can change the color of the line by addings these 'classes'
                      '.line-black', '.line-primary', '.line-white'
                      Line Alignment: Add classes like '.text-center', '.text-left', 'text-right'
                      -->
                    <h1 class="section-heading line-primary text-center" style="font-family: 华文行楷;"> <b>热门问答</b></h1>
                </div>
            </div>
			<div class="row align-items-stretch">





				<div class="col-lg-6 bt-bottom-info ab">
				
				

				<div class="section-heading">
                        <h3 class="section-heading heading-sm line-black" style="font-family: 华文新魏;">相关视频</h3>
				</div>
					<a href="https://haokan.baidu.com/v?pd=wisenatural&vid=6245742626804041572" class="video-41036 mb-4" data-fancybox="" data-ratio="2">
					<span class="play">
						<span class="fa fa-play"></span>
					</span>
					<img src="statics/images/video1.jpg" alt="Image" class="img-fluid">
                    </a>

                    <a href="https://haokan.baidu.com/v?pd=wisenatural&vid=16328034274891689111" class="video-41036 mb-4" data-fancybox="" data-ratio="2">
					<span class="play">
						<span class="fa fa-play"></span>
					</span>
					<img src="statics/images/video2.jpg" alt="Image" class="img-fluid">
                    </a>
				
				</div>








                <div class="col-lg-6 pl-lg-5 mb-5">
                    <!-- BEGIN: .custom-accordion -->
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: 华文新魏;font-size:18px" >
                                    <b>中国对于日本排放核污水的立场和态度？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
								   &diams;  中国政府表示对日本排放核污水问题感到强烈关切和担忧
									<p></p>
									&diams; 中国强调需要透明、客观、科学的信息，以便充分评估和理解日本核污水的排放计划
									<p></p>
									&diams; 中国对于日本选择排放核污水的决定提出了质疑，并明确反对这一做法
									<p></p>
									&diams; 中国坚持环保和人民安全放在首位

                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" style="font-family: 华文新魏;font-size:18px" >
										<b>中国如何应对？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
									&diams;  中国政府曾通过外交途径向日本提出抗议
									<p></p>
									&diams;  主张通过国际组织和多边机制来解决
									<p></p>
									&diams;  强调需要透明、科学的信息，以便充分评估日本的核污水排放计划
									<p></p>
									&diams;  采取国内监测措施
									<p></p>
									&diams;  强化相关法规，以确保进口自日本的产品符合中国的安全标准
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree" style="font-family: 华文新魏;font-size:18px" >
										<b>核污染问题面临的现状？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
									&diams;  核电站和其他核设施仍然存在潜在的事故风险
									<p></p>
									&diams;  核武器的扩散增加了核冲突的风险，对全球安全构成了威胁
									<p></p>
									&diams;  国际合作和共同的标准尚不足够
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingFour">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour" style="font-family: 华文新魏;font-size:18px" >
										<b>日本所处的态势？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
									&diams;  福岛县渔获主打“自主检测”
									<p></p>
									&diams;  当地超市、餐厅、生鲜店百态
									<p></p>
									&diams;  日本水产品价格下跌
									<p></p>
									&diams;  日本国际形象遭受非议
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->




                    </div>
                    <!-- END: .custom-accordion -->

                </div>
            </div>
        </div>

    </div>

















	

	<section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">开发团队</h3>
			<div class="inner-sec-wthree-agileits">
				<!---->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
									<img src="statics/images/lzy.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="https://github.com/ValerieLuo2003">
												<i class="bi bi-github"></i>
													<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
													<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
													</svg>
												</a>
											</li>
										</ul>
										</div>
									</div>
									<h3>罗梓洋
										<span>组长</span>
									</h3>
									<i>南开大学 密码科学与技术专业 大三学生</i>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
									<img src="statics/images/lxt.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
											<ul class="social_list1">
												<li>
													<a href="https://github.com/enertiy/">
													<i class="bi bi-github"></i>
														<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
														<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
														</svg>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h3>李晓彤
										<span>组员1</span>
									</h3>
									<i>南开大学 信息安全专业 大三学生</i>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="statics/images/jh.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
											<ul class="social_list1">
												<li>
													<a href="https://github.com/HanJhj">
													<i class="bi bi-github"></i>
														<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
														<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
														</svg>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h3>姜涵
										<span>组员2</span>
									</h3>
									<i>南开大学 信息安全专业 大三学生</i>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
									<img src="statics/images/syh.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
											<ul class="social_list1">
												<li>
													<a href="https://github.com/aurora-er">
													<i class="bi bi-github"></i>
														<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
														<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
														</svg>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h3>师雅卉
										<span>组员3</span>
									</h3>
									<i>南开大学 密码科学与技术专业 大三学生</i>
								</div>

							</div>
						</div>
					</div>
					<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="far fa-arrow-alt-circle-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="far fa-arrow-alt-circle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!---->
			</div>
		</div>
	</section>
	<!---->

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
					<li><a href="index.php?r=ecological" >影响-生态环境</a></li>
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
	<script src="statics/js/jquery-2.2.3.min.js"></script>
	<script src="statics/js/bootstrap.js"></script>
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
	<script src="statics/js/owl.carousel.js"></script>
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
	<script src="statics/js/move-top.js"></script>
	<script src="statics/js/easing.js"></script>
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
	<script src="statics/js/jquery-1.7.2.js"></script>
	<script src="statics/js/jquery.quicksand.js"></script>
	<script src="statics/js/script.js"></script>
	<script src="statics/js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
