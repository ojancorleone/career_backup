<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Administration ·</span>
        <span class="text-muted">Mail Account ·</span>
        <strong>{act}</strong>
    </span>
</nav>
<!-- START: ecommerce/dashboard -->
<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong>{act} Mail Account</strong>
        </span>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">   
            <!-- Horizontal Form -->
                    <form id="form-1" name="form-1" method="POST">
                        <input type="hidden" name="act" id="act" value="{act}">
                        <input type="hidden" name="id" id="id" value="{id}">
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="username">Email Account</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="mail_name" id="mail_name" value="{mail_name}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="username">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="email" id="email" value="{email}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="username">Protocol</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="protocol" id="protocol" value="{protocol}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="smtp_host">SMTP Host</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="smtp_host" id="smtp_host" value="{smtp_host}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="smtp_from">SMTP From</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="smtp_from" id="smtp_from" value="{smtp_from}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="smtp_fromname">From Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="smtp_fromname" id="smtp_fromname" value="{smtp_fromname}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="smtp_from">From Name Email</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="smtp_from" id="smtp_from" value="{smtp_from}" data-validation="[NOTEMPTY]">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="status">Status</label>
                            <div class="col-md-9">
                                <select class="form-control select2"
                                            data-validation="[NOTEMPTY]"
                                            id="status" 
                                            name="status">
                                        <option value="">Choose</option>    
                                        {list_status}
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="form-group row">
                                <div class="col-md-9 offset-md-3">
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

        

        $('#form-1').validate({
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
                            data: $('#form-1').serialize(),
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status==true){
                                $.notify(data.reason);
                                document.location.href="{base_url}main#{page}";
                            }else{
                                $.notify(data.reason);
                            }          
                        })
                        .fail(function() {
                            NProgress.done();
                            $.notify("Fail Save Data, Please check your connections...");
                        });
                        
                    },
                    onError: function (error) {
                        $.notify("Fail, Please Check your input...");
                    }

                }
            },
            debug: true

        });

    });
</script>
