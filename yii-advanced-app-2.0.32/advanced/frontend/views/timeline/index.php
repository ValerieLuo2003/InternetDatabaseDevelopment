<?php 
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于时间线界面
 */
$cnt4loop = 1; $cnt4image = 1;?>
<!DOCTYPE html> 
<html lang=""> 
    <head> 
        <meta charset=utf-8> 
        <title>日本排放新闻时间线</title> 
        <meta http-equiv=X-UA-Compatible content="IE=edge"> 
        <meta name=viewport content="width=device-width,initial-scale=1"> 
        <meta name=description content="最新进展：于欢曾应聘外卖员被拒"> 
        <link rel="shortcut icon" href=//www.baidu.com/favicon.ico type=image/x-icon> 
        <link rel=dns-prefetch href=//psstatic.cdn.bcebos.com> 
        <script src=//code.bdstatic.com/npm/spy-client@2.1.8/dist/spy-head.min.js type=text/javascript>
        </script> <link href=https://fyb-pc-static.cdn.bcebos.com/timeline/static/css/pc.106abc09.css rel=stylesheet>
    </head> 
    
    <body> 
        <div id=app>
            <div class="page" id="1494">                    
                    <div class="container">
                        <h2 class="title">日本排放新闻时间线</h2>
                        <?php $cnt4loop=1; ?>
                        <?php $latestdate;?>
                        <?php foreach ($timelines as $timeline) : ?>
                            <?php if($cnt4loop == 1)  $latestdate = $timeline->date; break; ?>
                        <?php endforeach; ?>
                        <p class="create-time">更新至<?= $latestdate?></p>
                        <div class="realtime-content c-bg-color-white">
                            <div class="infinite-list-container"> 
                                <div class="list">
                                    <?php $cnt4loop = 1; ?>
                                    <?php foreach ($timelines as $timeline) : ?>
                                        <?php if($cnt4loop++ > 1) break; ?>
                                        <div class="item"> 
                                            <div class="top-wrap c-color-gray"> 
                                                <span class="dot"></span> 
                                                <span class="time c-gap-left-small"><?= $timeline->date ?></span> 
                                                <span class="label pink c-gap-left-small f-l">新</span> 
                                            </div> 
                                            <div class="c-gap-left-large c-gap-inner-top-middle content "> 
                                                <div>  
                                                    <div class="c-text c-font-medium"> 
                                                        <a class="content-link  c-line-clamp1" target="_blank" href="https://baijiahao.baidu.com/s?id=1756898784707977934&amp;wfr=spider&amp;for=pc"> 
                                                            <!--s-slot--> <?= $timeline->name ?> <!--/s-slot--> 
                                                        </a> 
                                                    </div> 
                                                </div>  
                                            </div> 
                                        </div>
                                    <?php endforeach; ?>
                                    <?php foreach ($timelines as $timeline) : ?>
                                        <?php
											if($cnt4image > 14) $cnt4image = 1;
										?>
                                        <div class="item"> 
                                            <div class="top-wrap c-color-gray"> 
                                                <span class="dot"></span> 
                                                <span class="time c-gap-left-small"><?= $timeline->date ?></span>  
                                            </div> 
                                            <div class="c-gap-left-large c-gap-inner-top-middle content pic-content"> 
                                                <div class="img-content"> 
												<a class="post-img" href="<?= $timeline->url ?>"><img src="static/image/timeline/news000<?=$cnt4image++?>.jpg" alt=""></a>
												<div class="c-text c-font-medium"> 
                                                        <a class="content-link c-line-clamp3 " target="_blank" href="<?= $timeline->url ?>"> 
                                                        <!--s-slot--> <?= $timeline->name ?> <!--/s-slot--> </a> 
                                                    </div> 
                                                </div>  
                                            </div> 
                                        </div>
                                    <?php endforeach; ?>
                                </div> 
                                <div class="placeholder"></div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <script src=//code.bdstatic.com/npm/spy-client@2.1.8/dist/spy-client.min.js type=text/javascript></script> 
            <script type=text/javascript src=https://fyb-pc-static.cdn.bcebos.com/timeline/static/js/pc.7991a6a6.js></script>
    </body> 




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








</html> 