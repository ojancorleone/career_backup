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
            <!-- start hero-header -->
            <!-- end hero-header -->
            <div class="login-container-wrapper">   
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="login-box-wrapper">
                                        <form id="form-validation" name="form-validation" method="#">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center">Restore your forgotten password</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row gap-20">
                                                    <div class="col-sm-12 col-md-12">
                                                        <p class="mb-20">Enter your registered Email address *</p>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12">
                                                        <div class="form-group"> 
                                                            <label>Email Address</label>
                                                            <input id="email"
                                                                           class="form-control"
                                                                           placeholder="Email or Username"
                                                                           name="email"
                                                                           type="text"
                                                                           data-validation="[EMAIL]"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="submit" class="btn btn-primary">Restore</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
        var csfrData = {};
        csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajaxSetup({
        data: csfrData
        });  
        $("#tesswal").click(function(event) {
            /* Act on the event */
            swal("Here's a message!");
        });
        $(function() {

            $('#form-validation').validate({
                submit: {
                    rules : {
                        password : {
                            minlength : 6
                        },
                        password_confirm : {
                            minlength : 6,
                            equalTo : "#password"
                        }
                    },
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger'
                    },
                    callback: {
                        onBeforeSubmit: function (node) {
                            NProgress.start();
                        },
                        onSubmit: function (node) {
                            NProgress.start();
                            $.ajax({
                                url: '{base_url}forgot_password/check_forgot_password',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#form-validation').serialize() ,
                            })
                            .done(function(data) {
                                NProgress.done();
                                if(data.status=='success'){
                                     // Sweet Alert
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      },
                                      function(){
                                        $("#loginModal").modal('show');
                                    });                             
                                }else{
                                    // Sweet Alert
                                    swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                                }          
                            })
                            .fail(function() {
                                // Sweet Alert
                                swal({ 
                                       title: "Notification",       
                                       text: data.reason
                                      });
                            });
                            
                        }
                    }
                },
                debug: true
             });

        });
    </script>

</body>
</html>