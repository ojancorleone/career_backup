
/* 16. Handle Ajax Page Load - added in V1.5
------------------------------------------------ */
//var default_403 = '<div class="p-t-40 p-b-40 text-center f-s-20 content"><i class="fa fa-warning fa-lg text-muted m-r-5"></i> <span class="f-w-600 text-inverse">Error 404! Page not found.</span></div>';
var default_403 = '<div class="p-t-40 p-b-40 text-center f-s-20 content"><i class="fa fa-warning fa-lg text-muted m-r-5"></i> <span class="f-w-600 text-inverse">Coming Soon! This page is under Construction (Forbidden). </span></div>';
var default_404 = '<div class="p-t-40 p-b-40 text-center f-s-20 content"><i class="fa fa-warning fa-lg text-muted m-r-5"></i> <span class="f-w-600 text-inverse">Coming Soon! This page is under Construction (Not Found). </span></div>';
var default_500 = '<div class="p-t-40 p-b-40 text-center f-s-20 content"><i class="fa fa-warning fa-lg text-muted m-r-5"></i> <span class="f-w-600 text-inverse">Coming Soon! This page is under Construction (Internal Server Error). </span></div>';

var handleLoadPage = function(hash,callback) {
    
    var targetUrl = hash.replace('#','');
    $('.jvectormap-label, .jvector-label, .AutoFill_border ,#gritter-notice-wrapper, .ui-autocomplete, .colorpicker, .FixedHeader_Header, .FixedHeader_Cloned .lightboxOverlay, .lightbox').remove();
    $.ajax({
        type: 'POST',
        url: targetUrl, //with the page number as a parameter
        dataType: 'html',   //expect html to be returned
        beforeSend: function(){            
            if (typeof table_reload !== 'undefined') {
              clearInterval(table_reload);
            }
            if (typeof dashboard_reload !== 'undefined') {
              clearInterval(dashboard_reload);
            }
            NProgress.start();
        },
        success: function(data) {
            NProgress.done();
            $('#ajax-content').html(data);
            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 250);

            if (callback) {
                callback();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            if ( jqXHR.status == '403' ) {
                $('#ajax-content').html(default_403);
            }else if( jqXHR.status == '500' ) {
                $('#ajax-content').html(default_500);
            }else if( jqXHR.status == '404' ){
                $('#ajax-content').html(default_404);
            }else{
                $('#ajax-content').html(default_404);
            }

            console.log(jqXHR.status);
            NProgress.done();
        }
    });
};


/* 17. Handle Ajax Page Load Url - added in V1.5
------------------------------------------------ */
var handleCheckPageLoadUrl = function(hash,callback) {
    hash = (hash) ? hash : '#';
    
    if (hash === '') {
        $('#ajax-content').html(default_403);
    } else {
        $('.sidebar [href="'+hash+'"][data-toggle=ajax]').trigger('click');
        handleLoadPage(hash,callback);
    }
};


/* 18. Handle Ajax Sidebar Toggle Content - added in V1.5
------------------------------------------------ */
var handleSidebarAjaxClick = function() {
    $('[data-toggle=ajax]').click(function() {
        var targetLi = $(this).closest('li');
        var targetParentLi = $(this).parents();
        $('li').not(targetLi).not(targetParentLi).removeClass('cat__menu-left__item--active');
        $(targetLi).addClass('cat__menu-left__item--active');
        $(targetParentLi).addClass('cat__menu-left__item--active');
    });
};


/* 19. Handle Url Hash Change - added in V1.5
------------------------------------------------ */
var handleHashChange = function(callback) {
    $(window).hashchange(function() {
        if (window.location.hash) {
            handleLoadPage(window.location.hash,callback);
            $('#page-container').removeClass('page-sidebar-toggled');
        }
    });
};

var globalCallback;

/* Application Controller
------------------------------------------------ */
var App = function () {
    "use strict";
    
    return {
        //main function
        init: function (callback) {
            this.initAjaxFunction(callback);
        },
        initAjaxFunction: function(callback) {
            handleSidebarAjaxClick();
            handleCheckPageLoadUrl(window.location.hash,callback);
            handleHashChange(callback);
            
            globalCallback = callback;

            // ajax cache setup
            $.ajaxSetup({
                cache: true
            });
        }
    };
}();