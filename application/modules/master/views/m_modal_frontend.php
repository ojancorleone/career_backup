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
                            <a data-toggle="modal" href="{base_url}forgot_password">Forgot password?</a>
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
                        <label>Full Name</label>
                        <input id="validation[fullname]" class="form-control" placeholder="Fullname" name="validation[fullname]" type="text" data-validation="[FULLNAME]"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input id="validation[email]" class="form-control" placeholder="Email" name="validation[email]" type="text" data-validation="[EMAIL]">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" class="form-control password" name="validation[password]" type="password" data-validation="[L>=3]" data-validation-message="$ must be at least 6 characters" placeholder="Password">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input id="password_confirm" class="form-control password" name="validation[password_confirm]" type="password" data-validation="[L>=3]" placeholder="Re-type password again">
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
            <div class="col-sm-12 col-md-12 text-center">
                <p class="mb-20 ">Enter your email address that you used to register. We'll send you an email with your new password. </p>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" placeholder="Enter your email address" type="text">
                </div>
            </div>
            <!-- <div class="col-sm-12 col-md-12">
                <div class="checkbox-block">
                    <input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox">
                    <label class="" for="forgot_password_checkbox">Generate new password</label>
                </div>
            </div> -->
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