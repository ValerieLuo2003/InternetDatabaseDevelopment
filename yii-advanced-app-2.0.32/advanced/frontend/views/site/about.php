
<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于关于团队界面
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">


	<section class="banner-bottom-w3ls-agileinfo">
		<div class="container">
			<div class="row inner-sec-wthree-agileits">
                <div class="col-lg-6 bt-bottom-info ab">
					<img src="statics/images/background.jpg" class="img-fluid" alt=" " width = "600" height = "420" />
				</div>
				<div class="col-lg-6 bt-bottom-info">
                    <h3 class="tittle text-center" style="font-family: 华文楷体;">团队介绍</h3>
                    <h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;本网站是南开大学互联网数据库开发课程大作业，网站建站依靠yii框架进行搭建，网站页面分为前台部分和后台部分，同时网站也连接了数据库进行使用。</p></h4>
                    <h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;本网站由四名计算机学院和网络空间安全学院的大三学生创建，我们团队成员具有较强的个人能力和不错的团队协作能力，成员分工明确，各司其职，互帮互助，团队内有良好的学习氛围，遇到问题能及时沟通解决。如果有任何问题，可以在下面点击团队成员github链接访问主页，并联系我们。
                    </p></h4>
				</div>
			</div>
        </div>
    </section>

    <div class="container">
        			<!-- /.row -->
			<div class="row inner_stat">
				<div class="col-md-3 stats_left counter_grid text-center">
					<i class="far fa-building"></i>
					<p class="counter">150+</p>
					<h4>git提交次数</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid1 text-center">
					<i class="fas fa-users"></i>
					<p class="counter">4</p>
					<h4>团队成员数量</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid2 text-center">
					<i class="far fa-edit"></i>
					<p class="counter">7+</p>
					<h4>开发用的天数</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid3 text-center">
					<i class="far fa-smile"></i>
					<p class="counter">7000+</p>
					<h4>文件总数</h4>
				</div>
			</div>
			<!-- Three columns of text below the carousel -->
		<div class="row inner-sec-wthree-agileits jewel-grids-main-in ab">
                <div class="col-lg-3 bt-bottom-info ab">
                    <img src="statics/images/lzy.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">罗梓洋</h4>
					<p class="about-p" style="font-size:15px">
                        完成前台案例研究、各界观点页面，以及相应的后台数据管理,完成后台模板的导入、主页、个人作业界面,完成了对应于数据表casestudy、comment、personhomework的MVC结构,负责文档：实现文档、项目展示PPT、用户手册
                    </p>
                    <li><a href="https://github.com/ValerieLuo2003">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/lxt.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">李晓彤</h4>
					<p class="about-p" style="font-size:15px">完成前台核污染对生态环境、社会经济影响的页面，以及相应的后台数据管里，完成后台团队作业界面，完成了对应于数据表 ecological、cconomics 的 MVC 结构，负责文档: 实现文档、设计文档、项目展示 PPT、用户手册.。</p>
                    <li><a href="https://github.com/enertiy">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/jh.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">姜涵</h4>
                    <p class="about-p" style="font-size:15px">
                        完成前台核污染现状的新闻、时间线页面，以及相应的后台数据管理，完成对应于数据表 news 的 MVC 结构，并完成了爬虫，对 news 数据表的数据爬取，完成后台用户管里页面，实现一键部要功能，负责文档: 实现文档、部罢文档、项目展示 PPT、用户手册。
                    </p>
                    <li><a href="https://github.com/tttran67">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/syh.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
                <div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">师雅卉</h4>
                    <p class="about-p" style="font-size:15px">
                        完成前台模板的导入，前台导航栏和主页，完成前台核污染对国际关系影响的页面，以及相应的后台数据管里，完成了对应于数据表 internationalrelation 的 MVC 结构，负资文档: 实现文档、需求文档、项目展示 PPT、用户手册。
                    </p>
                    <li><a href="https://github.com/aurora-er">看我的github主页</a></li>
				</div>
        </div>
    </div>

    <div class="site-section">
        <h2 class="section-heading text-center" style="font-family: 华文楷体;">组员作业展示</h2>
        <p class="text-center" style="font-family: 华文楷体; font-size: 20px">下面是我们团队成员在课程中个人作业的github链接，欢迎浏览。（下载功能提供在后台，请登录后台下载）</p>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">
                        <div class="widget-inner"><img src="statics/images/web前端.png" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>

                        <div class="widget-inner">
                            <h3>Web前端初探</h3>
                        </div>
                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A1%EF%BC%882112957_%E7%BD%97%E6%A2%93%E6%B4%8B%EF%BC%89.zip">> 罗梓洋第一次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A1%EF%BC%882112075_%E6%9D%8E%E6%99%93%E5%BD%A4%EF%BC%89.zip">> 李晓彤第一次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A1%EF%BC%882113630_%E5%A7%9C%E6%B6%B5%EF%BC%89.zip">> 姜涵第一次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A1%EF%BC%882111224_%E5%B8%88%E9%9B%85%E5%8D%89%EF%BC%89.zip">> 师雅卉第一次作业</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">

                        <div class="widget-inner"><img src="statics/images/web前端2.jpg" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>
                        <div class="widget-inner">
                            <h3>Web前端设计</h3>
                        </div>

                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A2%EF%BC%882112957_%E7%BD%97%E6%A2%93%E6%B4%8B%EF%BC%89.zip">> 罗梓洋第二次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A2%EF%BC%882112075_%E6%9D%8E%E6%99%93%E5%BD%A4%EF%BC%89.zip">> 李晓彤第二次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A2%EF%BC%882113630_%E5%A7%9C%E6%B6%B5%EF%BC%89.zip">> 姜涵第二次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A2%EF%BC%882111224_%E5%B8%88%E9%9B%85%E5%8D%89%EF%BC%89.zip">> 师雅卉第二次作业</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">
                        <div class="widget-inner"><img src="statics/images/web前端3.png" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>
                        <div class="widget-inner">
                            <h3>开源建站工具初试</h3>
                        </div>

                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A3%EF%BC%882112957_%E7%BD%97%E6%A2%93%E6%B4%8B%EF%BC%89.zip">> 罗梓洋第三次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A3%EF%BC%882112075_%E6%9D%8E%E6%99%93%E5%BD%A4%EF%BC%89.zip">> 李晓彤第三次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A3%EF%BC%882113630_%E5%A7%9C%E6%B6%B5%EF%BC%89.zip">> 姜涵第三次作业</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/personal/%E4%BD%9C%E4%B8%9A3%EF%BC%882111224_%E5%B8%88%E9%9B%85%E5%8D%89%EF%BC%89.zip">> 师雅卉第三次作业</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">
                        <div class="widget-inner"><img src="statics/images/web前端4.jpg" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>
                        <div class="widget-inner">
                            <h3>团队作业开发文档</h3>
                        </div>

                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/team/NKU-%E4%B8%8D%E6%83%B3%E9%87%8D%E8%A3%85_%E9%9C%80%E6%B1%82%E6%96%87%E6%A1%A3%EF%BC%882112957_2112075_2113630_2111224%EF%BC%89.pdf">> 需求文档</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/team/NKU-%E4%B8%8D%E6%83%B3%E9%87%8D%E8%A3%85_%E8%AE%BE%E8%AE%A1%E6%96%87%E6%A1%A3%EF%BC%882112957_2112075_2113630_2111224%EF%BC%89.pdf">> 设计文档</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/team/NKU-%E4%B8%8D%E6%83%B3%E9%87%8D%E8%A3%85_%E5%AE%9E%E7%8E%B0%E6%96%87%E6%A1%A3%EF%BC%882112957_2112075_2113630_2111224%EF%BC%89.pdf">> 实现文档</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/team/NKU_%E4%B8%8D%E6%83%B3%E9%87%8D%E8%A3%85_%E7%94%A8%E6%88%B7%E6%89%8B%E5%86%8C%EF%BC%882112957_2112075_2113630_2111224%EF%BC%89.pdf">> 用户手册</a></li>
                                <li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/team/NKU-%E4%B8%8D%E6%83%B3%E9%87%8D%E8%A3%85_%E9%83%A8%E7%BD%B2%E6%96%87%E6%A1%A3%EF%BC%882112957_2112075_2113630_2111224%EF%BC%89.pdf">> 部署文档</a></li>
								<li><a href="https://github.com/ValerieLuo2003/InternetDatabaseDevelopment/blob/main/yii-advanced-app-2.0.32/advanced/data/team/NKU-%E4%B8%8D%E6%83%B3%E9%87%8D%E8%A3%85_%E9%A1%B9%E7%9B%AE%E5%B1%95%E7%A4%BAPPT%EF%BC%882112957_2112075_2113630_2111224%EF%BC%89.pptx">> 展示PPT</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>

            </div>
        </div>
    </div>
    <!-- END: .site-section -->

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

</div>
