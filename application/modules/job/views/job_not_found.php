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
                        <ul class="nav-mini sign-in" id="homepage">
                            <li><a data-toggle="modal" href="#loginModal">login</a></li>
                            <li><a data-toggle="modal" href="#registerModal">register</a></li>
                        </ul>

                        <ul class="nav-mini sign-in" id="dashboard">
                            <li><a href="{base_url}main#dashboard">Dashboard</a></li>
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
           <div class="error-page-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                            <div class="error-404" style="font-size: 70px; margin-bottom: 0; margin-top: -10px;">
                                Not Found!!!
                            </div>
                            <a href="{base_url}job" class="btn btn-primary mt-15">Back to List Job</a>
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

    <script type="text/javascript">

        $(function() {


        });
    </script>
</body>
</html>