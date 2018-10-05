<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Administration ·</span>
        <span class="text-muted">Company ·</span>
        <strong>{act}</strong>
    </span>
</nav>
<!-- START: ecommerce/dashboard -->
<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong>{act} Company</strong>
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
                                            <label for="company_name">Name</label>
                                                <input class="form-control" type="text" name="company_name" id="company_name" value="{company_name}" data-validation="[NOTEMPTY]" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="company_nickname">Nickname</label>
                                                <input class="form-control" type="text" name="company_nickname" id="company_nickname" value="{company_nickname}" data-validation="[NOTEMPTY]" placeholder="Nickname">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone_no">Phone Number</label>
                                                <input class="form-control" type="text" name="phone_no" id="phone_no" value="{phone_no}" data-validation="[NOTEMPTY,INTEGER]" placeholder="Phone Number">
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="fax_no">Fax Number</label>
                                                <input class="form-control" type="text" name="fax_no" id="fax_no" value="{fax_no}" data-validation="[NOTEMPTY,INTEGER]" placeholder="Fax Number">
                                        </div>
                                     </div>
                                </div>   

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                                <textarea class="form-control" rows="3" id="address" name="address" data-validation="[NOTEMPTY]" placeholder="Address">{address}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="zip_code">Zipcode</label>
                                                <input class="form-control" type="text" name="zip_code" id="zip_code" value="{zip_code}" data-validation="[NOTEMPTY,INTEGER]" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>                                

                                <div class="row">
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email_support">Email</label>
                                                <input class="form-control" type="text" name="email_support" id="email_support" value="{email_support}" data-validation="[EMAIL]" placeholder="Email">
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="12">Logo</label>
                                            <input type="file" class="dropify" id="logo" name="logo" data-height="300" data-max-file-size="1M" data-default-file="{logo}"/>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="form-actions">
                                <div class="form-group">
                                    <div class="col-md-12 ">
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

   });

   function goBack() {
        window.history.back();
    }

    $(function(){

        $('.dropify').dropify();

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
                        var form = document.getElementById('form-company');
                        var formData = new FormData(form);


                        $.ajax({
                            url: '{base_url}{page}/forms_submit',
                            type: 'POST',
                            dataType: 'json',
                            // data: $('#form-company').serialize(),
                            data: formData,
                            processData: false,
                            contentType: false
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
