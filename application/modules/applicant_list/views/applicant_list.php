<link rel="stylesheet" type="text/css" href="{base_url(assets/backend/AdminLTE.min.css)}"/>
<style>
    .form-check-input {
        margin-left: 0;
    }
    .mak-erot{
        border: 1px #999 solid;
        padding: 5px;
    }
    .popover{
        width:550px;
        max-width: none;
    }
</style>
<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Applicant List ·</span>
        
    </span>
</nav>

<section class="row">
    <div class="col-lg-3">
        <section class="card">
            <div class="card-header">
                <span class="cat__core__title">
                    <strong>Categories</strong>
                </span>
            </div>
            <div class="card-block">
                {cats}
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input job-categories" checked="checked" id="category-{id}" data-category="{id}">
                    <label class="form-check-label" for="exampleCheck1">{category}&nbsp;&nbsp;<span class="badge badge-default">{jml}</span></label>
                </div>
                {/cats}
            </div>
        </section>
    </div>
    <div class="col-lg-9">
        <section class="card">
            <div class="card-header">
                <span class="cat__core__title">
                    <div class="row">
                        <div class="col-md-9">
                            <strong>Applicants</strong>
                        </div>
                        <div class="col-md-3 pull-right">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control search-applicants" value="" id="search-applicants" name="search-applicants" placeholder="Search"/>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="list_data();"><i class="fa fa-search"></i>&nbsp;Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </div>
            <div class="card-block">
            
            <div class="row" id="id-applicants">
                
                <div class="col-xl-6">
                    <div class="cat__core__step cat__core__step--white mb-4 mak-erot">
                        <span class="cat__core__step__digit">
                            <img src="abc.jpg"/>
                        </span>
                        <div class="cat__core__step__desc">
                            <span class="cat__core__step__title">Bang Jali</span>
                            <p><i class="fa fa-briefcase"></i>&nbsp;1 Year quaranty</p>
                            <p>applied for IT staff - Telkom</p>
                        </div>
                    </div>
                </div>
              
            </div>
            </div>
            <div class="card-footer">
                <span id="data-paging">Loading...</span>
            </div>
        </section>
    </div>
</section>

<script>
    var categories=[];
    $(document).ready(function(){
        console.log(window.location.hash);
        if(window.location.hash == '#applicant_list/' || window.location.hash == '#applicant_list'){
            window.localStorage.removeItem("categories");
            window.localStorage.removeItem("search-applicants");
        }

        if( localStorage.getItem("categories") == null) {
            $.each( $('.job-categories'), function(){
                if( $(this).is(':checked') ){
                    cats = $(this).data('category');
                    categories.push( cats );
                }
            });
            localStorage.setItem("categories", categories );
        }else{
            $('.job-categories').attr('checked',false);
            cats = localStorage.getItem("categories")
            $.each( cats.split(','), function(i,cat){
                $('.job-categories[data-category="'+cat+'"]').attr('checked',true);
                categories.push( cat );
            });
        }
        $('.search-applicants').val( localStorage.getItem("search-applicants") );
    });

    function ImageExist(url) 
    {
        var http = new XMLHttpRequest();
        http.open('HEAD', url, false);
        http.send();
        return http.status!=404;
    }

    $('.job-categories').click(function(){
        cats = $(this).data('category');
        if( $(this).is(':checked') ){
            categories.push( cats );
        }else{
            categories.splice( categories.indexOf( cats ), 1);
        }
        if(categories=="" || categories==[]){
            localStorage.setItem("categories", [] );
        }else{
            localStorage.setItem("categories", categories );
        }

        list_data();
    });

    $('.search-applicants').keyup(function(){
        localStorage.setItem("search-applicants", $(this).val() );
    });


    $(document).ready(function(){
        list_data();
    });

    function list_data()
    {
        search = $('#search-applicants').val();
        filter = {page:'{page}', categories:categories,search:search};
        $.ajax({
            url:"{base_url}/data/{page}",
            method: "post",
            data: filter,
            cache: false,
            dataType: "json",
            beforeSend: function(){
                $('#id-applicants').html('<div class="col-xs-12 mx-auto"><div class="d-flex justify-content-center"><i class="fa fa-spin fa-3x fa-cog"></i></div></div>');
            },success: function(data){
                if(data.total_data > 0){
                    $('#id-applicants').html('<div class="col-md-6 applicant-1"></div><div class="col-md-6 applicant-2"></div>');
                    $('#data-paging').html(data.paging);
                    $.each(data.data,function(i,val){
                        if( (i % 2)==0 ){
                            classApp = 'applicant-1';
                        }else{
                            classApp = 'applicant-2';
                        }
                        
                        img = "{base_url2}assets/backend/images/profile/applicant/"+val.email+"/"+val.img_profile;
                        if(!ImageExist(img)){
                            img = "{base_url2}assets/backend/images/profile/defaults.png";
                        }
                        
                        $('#id-applicants >.'+classApp).append('<div class="cat__core__step cat__core__step--white mb-4 mak-erot"  title="" \
                                                                 data-toggle="popover-hover" \
                                                                 data-stages_name="'+val.stages_name+'"\
                                                                 data-last_date="'+val.last_date+'"\
                                                                 data-phone="'+val.phone+'"\
                                                                 data-facebook="'+val.facebook+'"\
                                                                 data-twitter="'+val.twitter+'"\
                                                                 data-instagram="'+val.instagram+'"\
                                                                 data-experience="'+val.experience+'"\
                                                                 data-email="'+val.email+'"\
                                                                 data-job_position="'+val.job_position+'"\
                                                                 data-company_name="'+val.company_name+'"\
                                                                 data-tgl_lahir="'+val.tgl_lahir+'"\
                                                                 data-original-title="'+val.fullname+'">\
                                                                    <span class="cat__core__step__digit">\
                                                                        <img class="img-thumbnail" src="'+img+'"/>\
                                                                    </span>\
                                                                    <div class="cat__core__step__desc">\
                                                                        <span class="cat__core__step__title">'+val.fullname+'</span>\
                                                                        <p><i class="fa fa-briefcase"></i>&nbsp;'+val.experience+' Year Experience</p>\
                                                                        <p>applied for '+val.job_position+' - '+val.company_name+'</p>\
                                                                    </div>\
                                                                </div>');
                    
                        //$('#abc').error(function(){}).attr('src',img2);
                    });
                    
                }else{
                    $('#id-applicants').html('<div class="col-xs-12 mx-auto"><div class="d-flex justify-content-center"><i class="fa fa-info"></i>&nbsp;No Result</div></div>');
                }
            },error: function(){
                $('#id-applicants').html('<div class="col-xs-12 mx-auto"><div class="d-flex justify-content-center"><i class="fa fa-info"></i>&nbsp;No Result</div></div>');
            },complete: function(){
                $("[data-toggle=popover-hover]").popover({
                    trigger: 'hover',
                    html: true,
                    placement: 'bottom',
                    content: function() {
                        experience = $(this).data('experience');
                        stages_name = $(this).data('stages_name');
                        last_date = $(this).data('last_date');
                        phone = $(this).data('phone');
                        facebook = $(this).data('facebook');
                        twitter = $(this).data('twitter');
                        instagram = $(this).data('instagram');
                        email = $(this).data('email');
                        job_position = $(this).data('job_position');
                        company_name = $(this).data('company_name');
                        tgl_lahir = $(this).data('tgl_lahir');

                        if(last_date=='0 Days'){
                            last_date = 'Now';
                        }else{
                            last_date = last_date + ' Ago';
                        }

                        return '<div class="row">\
                                    <div class="col-md-6">\
                                        <div><span class="text-muted">Applied For</span><div>'+job_position+'&nbsp;-&nbsp;'+company_name+'</div></div>\
                                        <div class="mt-1"><i class="fa fa-briefcase"></i>&nbsp;'+experience+' Years Experince</div>\
                                        <div class="mt-1"><span class="text-muted">Phone</span><div>'+phone+'</div></div>\
                                        <div class="mt-1"><span class="text-muted">Email</span><div>'+email+'</div></div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div><span class="text-muted">Date of Birth</span><div>'+tgl_lahir+'</div></div>\
                                        <div class="mt-1"><span class="text-muted">Current Stage</span><div>'+stages_name+'<br/><i class="fa fa-clock-o"></i>&nbsp;'+last_date+'</div></div>\
                                        <div class="mt-1"><span class="text-muted">Social Media</span><div>Instagram:&nbsp;'+instagram+'</div></div>\
                                    </div>\
                                </div>';
                    }
                });
            }

        });
    }
</script>
