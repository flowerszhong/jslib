<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage JsLib
 * @since JsLib 1.0
 */

get_header(); ?>

<div id="main">

						<div class="inner">
							
                                <?php get_template_part('parts/site','header'); ?>
                                <?php get_template_part('parts/home','banner'); ?>
                                <?php get_template_part('parts/home','hots'); ?>

							<!-- Section -->
								

							<!-- Section -->
								<section>
									<header class="major">
										<h2>前端基础教程</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/html5css3.jpg" alt="" /></a>
											<h3>HTML(5)+CSS(3)基础教程</h3>
											<p>HTML5&CSS5基础教程,囊括了html、css常用属性及其使用技巧。用于新手快速入门前端网页设计和制作。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/javascript.png" alt="" /></a>
											<h3>JavaScript DOM、事件</h3>
											<p>DOM 使 JavaScript 有能力对 HTML 事件做出反应。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jquery.jpg" alt="" /></a>
											<h3>jQuery 初步使用</h3>
											<p>jQuery是一个兼容多浏览器的javascript框架，核心理念是write less,do more(写得更少,做得更多)。使用 HTML DOM 来分配事件</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jquery.jpg" alt="" /></a>
											<h3>jQuery 实例讲解</h3>
											<p>jQuery是一个兼容多浏览器的javascript框架，核心理念是write less,do more(写得更少,做得更多)。使用 HTML DOM 来分配事件</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jquery-plugins.jpg" alt="" /></a>
											<h3>jQuery 插件</h3>
											<p>要说jQuery 最成功的地方，我认为是它的可扩展性吸引了众多开发者为其开发插件，从而建立起了一个生态系统。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bootstrap.jpg" alt="" /></a>
											<h3>Bootstrap 入门</h3>
											<p>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架。Bootstrap 是基于 HTML、CSS、JAVASCRIPT 的，它简洁灵活，使得 Web 开发更加快捷。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bootstrap-layout.png" alt="" /></a>
											<h3>Bootstrap 布局</h3>
											<p>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架。Bootstrap 是基于 HTML、CSS、JAVASCRIPT 的，它简洁灵活，使得 Web 开发更加快捷。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bootstrap-com.png" alt="" /></a>
											<h3>Bootstrap 组件</h3>
											<p>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架。Bootstrap 是基于 HTML、CSS、JAVASCRIPT 的，它简洁灵活，使得 Web 开发更加快捷。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bootstrap.jpg" alt="" /></a>
											<h3>Bootstrap 插件</h3>
											<p>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架。Bootstrap 是基于 HTML、CSS、JAVASCRIPT 的，它简洁灵活，使得 Web 开发更加快捷。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
									</div>
								</section>


								<!-- Section -->
								<section>
									<header class="major">
										<h2>前端进阶教程</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jquery.jpg" alt="" /></a>
											<h3>jQuery 源码分析</h3>
											<p>关于什么时候应该阅读源码，我的个人感受是在如下情况下，你需要进行代码阅读:1.熟练使用API的情况下，了解内部的原理。2.需要写一个插件或者类似的功能时候。3.对别人的代码进行分析和理解的时候</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bootstrap-jquery.jpg" alt="" /></a>
											<h3>jQuery + Bootstrap 实例</h3>
											<p>利用 jQuery Bootstrap 实现特定网页效果和功能，实现博客页面、企业页面、管理面板...</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/css3.jpg" alt="" /></a>
											<h3>高级 CSS 技巧</h3>
											<p>使用 :not() 在菜单上应用/取消应用边框 给body添加行高 所有一切都垂直居中 逗号分隔的列表</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/javascript.png" alt="" /></a>
											<h3>高级 JavaScript 技巧</h3>
											<p>类型检测|安全的构造函数|惰性载入函数|函数绑定|函数节流|自定义事件|使用定时器固定时间执行方法</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tools.jpg" alt="" /></a>
											<h3>前端构建工具</h3>
											<p>说到构建工具，我往往会在前面加「自动化」三个字，因为构建工具就是用来让我们不再做机械重复的事情，解放我们的双手的。</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jsgame.jpg" alt="" /></a>
											<h3>JavaScript 开发小游戏</h3>
											<p>JavaScript 早已不只是一门写写网页特效的脚本语言了，如今广泛用于网站的前端交互。同时也可以快速的开发有趣的游戏</p>
											<ul class="actions">
												<li><a href="#" class="button">未发布</a></li>
											</ul>
										</article>
										
									</div>
								</section>

						</div>
					</div>




<?php 
get_sidebar();

get_footer(); ?>

