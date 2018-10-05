<?php $this->load->view('master/m_header_frontend')?>
<body class="home not-transparent-header">
    <div id="introLoader" class="introLoading"></div>
    <!-- start Container Wrapper -->
    <div class="container-wrapper">
        <!-- start Header -->
        <header id="header">
            <!-- start Navbar (Header) -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">
                <div class="container">
                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="#"><img src="{base_url}assets/frontend/images/{logo}" alt="Logo" /></a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
                        <ul class="nav navbar-nav" id="responsive-menu" style="">
                            <?php $this->load->view('master/m_menu_frontend')?>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                    <div class="nav-mini-wrapper">
                        <ul class="nav-mini sign-in">
                            <li><a data-toggle="modal" href="#loginModal">login</a></li>
                            <li><a data-toggle="modal" href="#registerModal">register</a></li>
                        </ul>
                    </div>
                </div>
                <div id="slicknav-mobile"></div>
            </nav>
            <!-- end Navbar (Header) -->
            <?php $this->load->view('master/m_modal_frontend')?>
        </header>
        <!-- start Main Wrapper -->
        <div class="main-wrapper">
			<!-- end hero-header -->
			<div class="section sm">
				<div class="container">
					
					<div class="row">
					
						<div class="col-sm-8 col-md-9">
						
							<div class="blog-wrapper">

								<div class="blog-item">
								
									<div class="blog-media">
										<div class="overlay-box">
											<a class="blog-image" href="blog-single.html">
												<img src="{base_url}assets/frontend/images/blog/blog-01.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="pe-7s-link"></i></div>
													</div>
												</div>
											</a>
										</div>
									</div>
											
									<div class="blog-content">
										<h3><a href="blog-single.html" class="inverse">Blog title post with a featured image</a></h3>
										<ul class="blog-meta">
											<li>by <a href="#">Admin</a></li>
											<li>by January 09, 2016</li>
											<li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
											<li>32 comments</li>
										</ul>
										<div class="blog-entry">  
											Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. 
										</div>
										<a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								
								</div>
								
								<div class="blog-item">
								
									<div class="blog-media">
										<div class="overlay-box">
											<a class="blog-image" href="blog-single.html">
												<img src="{base_url}assets/frontend/images/blog/blog-02.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="pe-7s-link"></i></div>
													</div>
												</div>
											</a>
										</div>
									</div>
											
									<div class="blog-content">
										<h3><a href="blog-single.html" class="inverse">Another blog title post with a featured image</a></h3>
										<ul class="blog-meta">
											<li>by <a href="#">Admin</a></li>
											<li>by January 09, 2016</li>
											<li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
											<li>32 comments</li>
										</ul>
										<div class="blog-entry">  
											Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. 
										</div>
										<a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								
								</div>
								
								<div class="blog-item">
								
									<div class="blog-media">
										<div id="bootstrap-carousel-slider" class="carousel slide" data-ride="carousel" data-interval="5000">

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
											
												<!-- First slide -->
												<div class="item active">
													<div class="image">
														<img src="{base_url}assets/frontend/images/blog/blog-03.jpg" alt="Image" />
													</div>
													<div class="carousel-caption">
														<p>This is the caption for slide 1</p>
													</div>
												</div> <!-- /.item -->
												
												<!-- Second slide -->
												<div class="item">
													<div class="image">
														<img src="{base_url}assets/frontend/images/blog/blog-02.jpg" alt="Image" />
													</div>
													<div class="carousel-caption">
														<p>This is the caption for slide 2</p>
													</div>
												</div><!-- /.item -->
												
												<!-- Third slide -->
												<div class="item">
													<div class="image">
														<img src="{base_url}assets/frontend/images/blog/blog-01.jpg" alt="Image" />
													</div>
													<div class="carousel-caption">
														<p>This is the caption for slide 3</p>
													</div>
												</div><!-- /.item -->
											
											</div><!-- /.carousel-inner -->

											<!-- Controls -->
											<a class="left carousel-control" href="#bootstrap-carousel-slider" role="button" data-slide="prev">
												<span class="carousel-control-left"><i class="pe-7s-angle-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#bootstrap-carousel-slider" role="button" data-slide="next">
												<span class="carousel-control-right"><i class="pe-7s-angle-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
											</a>
										</div><!-- /.carousel -->

									</div>
											
									<div class="blog-content">
										<h3><a href="blog-single.html" class="inverse">Blog Title Post With a Slider</a></h3>
										<ul class="blog-meta">
											<li>by <a href="#">Admin</a></li>
											<li>by January 09, 2016</li>
											<li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
											<li>32 comments</li>
										</ul>
										<div class="blog-entry">  
											Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. 
										</div>
										<a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								
								</div>
								
								<div class="blog-item">
					
									<div class="blog-content">
										<h3><a href="blog-single.html" class="inverse">Blog Title Post Without any Image</a></h3>
										<ul class="blog-meta">
											<li>by <a href="#">Admin</a></li>
											<li>by January 09, 2016</li>
											<li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
											<li>32 comments</li>
										</ul>
										<div class="blog-entry">  
											Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. 
										</div>
										<a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								
								</div>
								
								<div class="blog-item">
					
									<div class="blog-media">
										<div class="flex-video vimeo"> 
											<iframe src="http://player.vimeo.com/video/71319358" allowfullscreen></iframe> 
										</div>
									</div>
									
									<div class="blog-content">
										<h3><a href="blog-single.html" class="inverse">Blog Title Post Viemo Video</a></h3>
										<ul class="blog-meta">
											<li>by <a href="#">Admin</a></li>
											<li>by January 09, 2016</li>
											<li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
											<li>32 comments</li>
										</ul>
										<div class="blog-entry">  
											Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. 
										</div>
										<a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								
								</div>
								
								<div class="blog-item">
					
									<div class="blog-media">
										<div class="flex-video youtube"> 
											<iframe width="560" height="315" src="https://www.youtube.com/embed/LGvvfOQWyHo" allowfullscreen></iframe>
										</div>
									</div>
									
									<div class="blog-content">
										<h3><a href="blog-single.html" class="inverse">Blog Title Post Youtube Video</a></h3>
										<ul class="blog-meta">
											<li>by <a href="#">Admin</a></li>
											<li>by January 09, 2016</li>
											<li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
											<li>32 comments</li>
										</ul>
										<div class="blog-entry">  
											Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. 
										</div>
										<a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
									</div>
								
								</div>
								
								<div class="pager-wrapper mmt">
								
									<nav class="pager-right">
										<ul class="pagination">
											<li>
												<a href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
												</a>
											</li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><span>...</span></li>
											<li><a href="#">11</a></li>
											<li><a href="#">12</a></li>
											<li><a href="#">13</a></li>
											<li>
												<a href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
												</a>
											</li>
										</ul>
									</nav>	
								
								</div>

								
							</div>
						
						</div>
						
						<div class="col-sm-4 col-md-3 mt-50-xs">
						
							<aside class="sidebar">
						
								<div class="sidebar-inner no-border for-blog">
								
									<div class="sidebar-module">
										<div class="sidebar-module-inner">
											<div class="sidebar-mini-search">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search for...">
													<span class="input-group-btn">
														<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</div>
										</div>
									</div>
									
									<div class="clear"></div>

									<div class="sidebar-module">
										<h4 class="sidebar-title">Categories</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-category">
												<li><a href="#">Business<span>(25)</span></a></li>
												<li class="active"><a href="#">Commerce<span>(2)</span></a></li>
												<li><a href="#">Coporate<span>(14)</span></a></li>
												<li><a href="#">Creative<span>(157)</span></a></li>
												<li><a href="#">Entertainment<span>(87)</span></a></li>
												<li><a href="#">Nonprofit<span>(47)</span></a></li>
												<li><a href="#">Personal<span>(8)</span></a></li>
												<li><a href="#">Technology<span>(32)</span></a></li>
												<li><a href="#">Miscellaneous<span>(26)</span></a></li>
											</ul>
										</div>
									</div>
									
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h4 class="sidebar-title">Latest Posts</h4>
										<div class="sidebar-module-inner">
										
											<ul class="sidebar-post">
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/01-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Enough around remove to barton agreed regret</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>June 01, 2016</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/02-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Year well shot deny shew come now had. Shall downs stand marry taken his for out</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>April 25, 2016</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/03-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Do related mr account brandon an up. Wrong for never ready ham these witty him</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>March 20, 2016</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/04-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Our compass see age uncivil matters weather forbade her minutes</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>March 05, 2016</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/05-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Ready how but truth son new under.</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>February 17, 2015</p>
														</div>
													</a>
												</li>
											</ul>
										
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h4 class="sidebar-title">Popular Posts</h4>
										<div class="sidebar-module-inner">
											
											<ul class="sidebar-post">
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/01-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Appetite welcomed interest the goodness boy</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>5 comments</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/02-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Wrong for never ready ham these witty him</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>5 comments</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/03-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Tell size come hard mrs and four fond are</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>5 comments</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/04-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Side need at in what dear ever upon</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>5 comments</p>
														</div>
													</a>
												</li>
												<li class="clearfix">
													<a href="blog-single.html">
														<div class="image">
															<img src="{base_url}assets/frontend/images/blog/05-sm.jpg" alt="Popular Post" />
														</div>
														<div class="content">
															<h6>Same down want joy neat ask pain help</h6>
															<p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>5 comments</p>
														</div>
													</a>
												</li>
											</ul>
										
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h4 class="sidebar-title">Archives</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-archives">
												<li><a href="#">January 2015<span>(25)</span></a></li>
												<li class="active"><a href="#">February 2015<span>(2)</span></a></li>
												<li><a href="#">March 2015<span>(14)</span></a></li>
												<li><a href="#">April 2015<span>(157)</span></a></li>
												<li><a href="#">June 2015<span>(87)</span></a></li>
											</ul>
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h4 class="sidebar-title">Tags</h4>
										<div class="sidebar-module-inner">
											<div class="tag-cloud clearfix">
												<a href="#" class="tag-item">HTML5</a> <a href="#" class="tag-item">CSS3</a> <a href="#" class="tag-item">jQuery</a> 
												<a href="#" class="tag-item">Creative</a> <a href="#" class="tag-item">Design</a> <a href="#" class="tag-item">iOS</a> 
												<a href="#" class="tag-item">Android</a> <a href="#" class="tag-item">Video</a> <a href="#" class="tag-item">Markup</a> 
												<a href="#" class="tag-item">Programming</a> <a href="#" class="tag-item">SEO</a>
											</div>
										</div>
									</div>
									
									<div class="clear"></div>

									<div class="sidebar-module">
										<h4 class="sidebar-title">Sidebar Text Widget</h4>
										<div class="sidebar-module-inner">
											<div class="sidebar-text-widget">
												<p>In alteration insipidity impression by travelling reasonable up motionless. Of regard warmth by unable sudden garden ladies. No kept hung am size spot no. Likewise led and dissuade <a href="#">rejoiced</a> welcomed husbands boy.</p>
												<ul>
													<li>Eat imagine you chiefly few end ferrars compass</li>
													<li>Be visitor females am ferrars inquiry</li>
													<li>Latter law remark two lively thrown</li>
													<li>Spot set they know rest its</li>
													<li>Raptures law diverted believed jennings</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h4 class="sidebar-title">Meta</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-list">
												<li><a href="#">Log in</a></li>
												<li><a href="#">Entries RSS</a></li>
												<li><a href="#">Comments RSS</a></li>
												<li><a href="#">WordPress.org</a></li>
											</ul>
										</div>
									</div>
									
									<div class="clear"></div>

								</div>
							
							</aside>
							
						</div>
						
					</div>
					
				</div>
			</div>


            <?php $this->load->view('master/m_footer_frontend')?>

        </div>
        <!-- end Main Wrapper -->
    </div>
    <!-- / .wrapper -->
    <!-- end Container Wrapper -->
    <!-- start Back To Top -->
    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>
    <!-- end Back To Top -->
    <!-- JS -->
    <?php $this->load->view('master/m_script_frontend')?>
   
</body>
</html>