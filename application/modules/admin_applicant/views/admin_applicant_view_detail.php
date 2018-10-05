<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Administration ·</span>
        <span class="text-muted">Applicant ·</span>
        <strong>{act}</strong>
    </span>
</nav>
<!-- START: ecommerce/dashboard -->
<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong>{act} Applicant</strong>
        </span>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">   
                    <!-- Horizontal Form -->
                        <form id="form-company" name="form-company" method="POST">
                            <input type="hidden" name="act" id="act" value="{act}">
                            <input type="hidden" name="id" id="id" value="{id}">
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="fullname">Full Name</label>
                                                <input class="form-control" type="text" name="fullname" id="fullname" value="{fullname}" data-validation="[NOTEMPTY]" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                                <input class="form-control" type="text" name="email" id="email" value="{email}" data-validation="[EMAIL]" placeholder="Email">
                                        </div>
                                     </div>
                                </div>
                                
                                

                                <div class="row">
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control select2"
                                                        data-validation="[NOTEMPTY]"
                                                        id="agama" 
                                                        name="agama">
                                                    <option value="">Choose</option>    
                                                    {list_agama}
                                            </select>
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control select2"
                                                        data-validation="[NOTEMPTY]"
                                                        id="jenis_kelamin" 
                                                        name="jenis_kelamin">
                                                    <option value="">Choose</option>    
                                                    {list_jenis_kelamin}
                                            </select>
                                        </div>
                                     </div>
                                </div>

                                <div class="row" id="form-password" style="display: none;">
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password" id="password" value="" data-validation="[NOTEMPTY]" placeholder="Password">
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password_confirm">Repeat Password</label>
                                                <input class="form-control" type="password" name="password_confirm" id="password_confirm" value="" data-validation="[V==password]" placeholder="Repeat Password">
                                        </div>
                                     </div>
                                </div>

                                <div class="row">
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="fax_no">Phone</label>
                                                <input class="form-control" type="text" name="phone" id="phone" value="{phone}" data-validation="[NOTEMPTY,INTEGER]" placeholder="Phone Number">
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control select2"
                                                        data-validation="[NOTEMPTY]"
                                                        id="status" 
                                                        name="status">
                                                    <option value="">Choose</option>    
                                                    {list_status}
                                            </select>
                                        </div>
                                     </div>
                                </div>   
                                <div class="form-actions">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                            <button type="button" class="btn btn-default pull-left" onclick="goBack()" >Back</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    <!-- End Horizontal Form -->
                </div>
            </div>        
        </div>
    </div>
</section>
<!-- END: ecommerce/dashboard -->
<!-- START: page scripts -->
<script>
   jQuery(document).ready(function($) {
        $('.select2').select2();
        if ($("#act").val() == "") { //add
            $("#form-password").show();
        }else{
            $('#password_confirm').removeAttr('data-validation');
            $('#password').removeAttr('data-validation');
        }
   });

   function goBack() {
        window.history.back();
    }

    $(function(){

        $('#form-company').validate({
            submit: {
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

                        $.ajax({
                            url: '{base_url}{page}/forms_submit',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#form-company').serialize(),
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status=="success"){
                                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                                document.location.href="{base_url}main#{page}";
                            }else{
                                toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }          
                        })
                        .fail(function() {
                            NProgress.done();
                            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                        });
                        
                    },
                    onError: function (error) {
                        toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                    }

                }
            },
            debug: true

        });

    });
</script>
