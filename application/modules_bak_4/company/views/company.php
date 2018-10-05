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
           
            
            
            <div class="section sm">
            
                <div class="container">
                
                    <div class="sorting-wrappper alt">
            
                        <div class="GridLex-grid-middle">
                        
                            <div class="GridLex-col-3_sm-12_xs-12">
                            
                                <div class="sorting-header">
                                    <h3 class="sorting-title">254 Company</h3>
                                </div>
                                
                            </div>
                            
                            <div class="GridLex-col-5_sm-6_xs-6_xss-12">
                            
                                <div class="sorting-content">
                                
                                    <div class="form-group GridLex-gap-10-wrappper">
                                        
                                        <div class="GridLex-grid-middle">
                                        
                                            <div class="GridLex-col-5_sm-6_xs-12">
                                                <label>Sort by:</label>
                                            </div>
                                            
                                            <div class="GridLex-col-7_sm-6_xs-12">
                                                <select class="selectpicker form-control" data-show-subtext="true">
                                                    <option value="0">Relavent</option>
                                                    <option value="1" data-subtext="(newest to oldest)">Date Posted</option>
                                                    <option value="2" data-subtext="(oldest to newest)">Date Posted</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="GridLex-col-4_sm-6_xs-6_xss-12">
                            
                                <div class="sorting-content">
                                
                                    <div class="form-group GridLex-gap-10-wrappper">
                                        
                                        <div class="GridLex-grid-middle">
                                        
                                            <div class="GridLex-col-3_sm-6_xs-12">
                                                <label>Filter by:</label>
                                            </div>
                                            
                                            <div class="GridLex-col-9_sm-6_xs-12">
                                                <select class="selectpicker form-control" data-show-subtext="true">
                                                    <option value="0">All</option>
                                                    <option value="1">Asia</option>
                                                    <option value="2">Africa</option>
                                                    <option value="3">Europe</option>
                                                    <option value="4">America</option>
                                                    <option value="5">Oceana</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="company-grid-wrapper top-company-2-wrapper">

                        <div class="GridLex-gap-30">
                        
                            <div class="GridLex-grid-noGutter-equalHeight">
                            
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        
                        </div>

                    </div>
                    
                    <div class="pager-wrapper">
                                
                        <ul class="pager-list">
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="number">
                                <span class="mr-5"><span class="font600">page</span></span>
                            </li>
                            <li class="form">
                                <form>
                                    <input type="text" value="1" class="form-control"> 
                                </form>
                            </li>
                            <li class="number">
                                <span class="mr-5">/</span> <span class="font600">79</span>
                            </li>
                            <li class="paging-nav"><a href="#">go</a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>   
                    
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