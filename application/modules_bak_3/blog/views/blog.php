<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>{title}</title>
    <meta name="description" content="HTML Responsive Landing Page Template for Job Portal Based on Twitter Bootstrap 3.x.x" />
    <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{base_url}assets/frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{base_url}assets/frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{base_url}assets/frontend/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="{base_url}assets/frontend/images/ico/{favicon}">

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{base_url}assets/frontend/bootstrap/css/bootstrap.min.css" media="screen">
    <link href="{base_url}assets/frontend/css/animate.css" rel="stylesheet">
    <link href="{base_url}assets/frontend/css/main.css" rel="stylesheet">
    <link href="{base_url}assets/frontend/css/component.css" rel="stylesheet">

    <!-- CSS Font Icons -->
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/linearicons/style.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/rivolicons/style.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-ventures/flaticon-ventures.css">

    <!-- CSS Custom -->
    <link href="{base_url}assets/frontend/css/style.css" rel="stylesheet">

</head>
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
            <!-- start Sign-in Modal -->
            <div id="loginModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <form id="form-login" name="form-validation" method="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Sign-in into your account</h4>
                </div>
                    <div class="modal-body">
                        <div class="row gap-20">
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input id="validation[email]"
                                                           class="form-control"
                                                           placeholder="Email or Username"
                                                           name="validation[email]"
                                                           type="text"
                                                           data-validation="[EMAIL]">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="validation[password]"
                                                           class="form-control password"
                                                           name="validation[password]"
                                                           type="password" data-validation="[L>=3]"
                                                           data-validation-message="$ must be at least 6 characters"
                                                           placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="checkbox-block">
                                        <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                        <label class="" for="remember_me_checkbox">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="login-box-link-action">
                                        <a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="login-box-box-action">
                                        No account? <a data-toggle="modal" href="#registerModal">Register</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary">Log-in</button>
                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                </div>
                </form>
            </div>
            <!-- end Sign-in Modal -->
            <!-- start Register Modal -->
            <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <form id="form-register" name="form-validation" method="#">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Create your account for free</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row gap-20">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="validation[email]"
                                                           class="form-control"
                                                           placeholder="Email or Username"
                                                           name="validation[email]"
                                                           type="text"
                                                           data-validation="[EMAIL]">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password"
                                                           class="form-control password"
                                                           name="validation[password]"
                                                           type="password" data-validation="[L>=3]"
                                                           data-validation-message="$ must be at least 6 characters"
                                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input id="password_confirm"
                                                           class="form-control password"
                                                           name="validation[password_confirm]"
                                                           type="password" data-validation="[L>=3]"
                                                           placeholder="Re-type password again">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="checkbox-block">
                                    <input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                    <label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="login-box-box-action">
                                    Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" id="btn-register" class="btn btn-primary">Register</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                    </div>
                </form>
            </div>
            <!-- end Register Modal -->
            <!-- start Forget Password Modal -->
            <div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Restore your forgotten password</h4>
                </div>
                <div class="modal-body">
                    <div class="row gap-20">
                        <div class="col-sm-12 col-md-12">
                            <p class="mb-20">Maids table how learn drift but purse stand yet set. Music me house could among oh as their. Piqued our sister shy nature almost his wicket. Hand dear so we hour to.</p>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" placeholder="Enter your email address" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="checkbox-block">
                                <input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                <label class="" for="forgot_password_checkbox">Generate new password</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="login-box-box-action">
                                Return to <a data-toggle="modal" href="#loginModal">Log-in</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary">Restore</button>
                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                </div>
            </div>
            <!-- end Forget Password Modal -->
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


            <footer class="footer-wrapper">
                <div class="main-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="footer-about-us">
                                            <h5 class="footer-title">about E-Recruit</h5>
                                            <p>Sudden looked elinor off gay estate nor silent. Son read such next see the rest two. Was use extent old entire sussex...</p>
                                            <a href="#">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5 mt-30-xs">
                                        <h5 class="footer-title">quick links</h5>
                                        <ul class="footer-menu clearfix">
                                            <li><a href="#">Local Jobs</a></li>
                                            <li><a href="#">Company Directory</a></li>
                                            <li><a href="#">Browse Jobs</a></li>
                                            <li><a href="#">Salary Estimator</a></li>
                                            <li><a href="#">Success Stories</a></li>
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Post a Job</a></li>
                                            <li><a href="#">Employer Login</a></li>
                                            <li><a href="#">Publisher</a></li>
                                            <li><a href="#">Include My Jobs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 mt-30-sm">
                                <h5 class="footer-title">newsletter</h5>
                                <p>Subsribe to get our latest updates and oeffers</p>
                                <div class="footer-newsletter">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="enter your email " />
                                        <button class="btn btn-primary">subsribe</button>
                                    </div>
                                    <p class="font-italic font13">*** Don't worry, we wont spam you!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <p class="copy-right">&#169; Copyright {copyright} {footer}</p>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <ul class="bottom-footer-menu">
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Blogs</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <ul class="bottom-footer-menu for-social">
                                    <li><a href="#"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
                                    <li><a href="#"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
                                    <li><a href="#"><i class="ri ri-google-plus" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
                                    <li><a href="#"><i class="ri ri-youtube-play" data-toggle="tooltip" data-placement="top" title="youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/smoothscroll.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/wow.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-tokenfield.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap3-wysihtml5.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery-filestyle.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/handlebars.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.countimator.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.countimator.wheel.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/slick.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/easy-ticker.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.introLoader.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.responsivegrid.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/customs.js"></script>
    <script src="{base_url}assets/backend/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script type="text/javascript">
    
        var csfrData = {};
        csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajaxSetup({
        data: csfrData
        });    

        $(function() {
            // Form Validation
            $('#form-login').validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger'
                    },
                    callback: {
                        onBeforeSubmit: function (node) {

                        },
                        onSubmit: function (node) {

                            $.ajax({
                                url: '{base_url}login/check_login',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-login').serialize() ,
                            })
                            .done(function(data) {
                                if(data.status=='success'){
                                    document.location.href="{base_url}main#dashboard";
                                }else{
                                    $.notify("Login Fail, Please Try Again...");
                                }          
                            })
                            .fail(function() {
                                    $.notify("Login Error, Please Check your connections...");
                            });
                            
                        }
                    }
                },
                debug: true
            });

            $('#form-register').validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger'
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                        },
                        onSubmit: function (node) {
                            var password = $("#password").val();
                            var password_confirm = $("#password_confirm").val();

                            if (password != password_confirm ) {
                                console.log("fail");
                            }else{
                                $.ajax({
                                    url: '{base_url}register',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: $('#form-register').serialize() ,
                                })
                                .done(function(data) {
                                    console.log("success");        
                                })
                                .fail(function() {
                                    console.log("fail");
                                });
                            }
                        }
                    }
                },
                debug: true
            });
        });
    </script>
</body>
</html>