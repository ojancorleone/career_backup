<div class="col-lg-12">
    <!-- START: forms/form-wizard -->
    <section class="card">
        <div class="card-header">
            <span class="cat__core__title">
                <strong>Form Wizard</strong>
                <a href="http://www.jquery-steps.com/" target="_blank" class="btn btn-sm btn-primary ml-2">Official Documentation <i class="icmn-link ml-1"><!-- --></i></a>
            </span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-black"><strong>Form Wizard w/ Icons</strong></h5>
                    <p class="text-muted">Element: read <a href="http://www.jquery-steps.com/" target="_blank">official documentation<small><i class="icmn-link ml-1"><!-- --></i></small></a></p>
                    <div class="mb-5">
                        <div id="example-icons" class="cat__wizard">
                            <h3>
                                <i class="icmn-user cat__wizard__steps__icon"></i>
                                <span class="cat__wizard__steps__title">Account Info</span>
                            </h3>
                            <section class="text-center">
                                <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            </section>
                            <h3>
                                <i class="icmn-book cat__wizard__steps__icon"></i>
                                <span class="cat__wizard__steps__title">Billing Info</span>
                            </h3>
                            <section class="text-center">
                                <p>Wonderful transition effects.</p>
                            </section>
                            <h3>
                                <i class="icmn-checkmark cat__wizard__steps__icon"></i>
                                <span class="cat__wizard__steps__title">Confirmation</span>
                            </h3>
                            <section class="text-center">
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

<!-- START: page scripts -->
<script>
   $( document ).ready(function() {

        $("#example-icons").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });
    });
</script>