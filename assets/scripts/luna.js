/**
 * LUNA - Responsive Admin Theme
 *
 */

$(document).ready(function () {



    // Handle minimalize left menu
    $('.left-nav-toggle a').on('click', function(event){
        event.preventDefault();
        $("body").toggleClass("nav-toggle");
    });


    // Hide all open sub nav menu list
    $('.nav-second').on('show.bs.collapse', function () {
        $('.nav-second.in').collapse('hide');
    });

    // Handle panel toggle
    $('.panel-toggle').on('click', function(event){
        event.preventDefault();
        var hpanel = $(event.target).closest('div.panel');
        var icon = $(event.target).closest('i');
        var body = hpanel.find('div.panel-body');
        var footer = hpanel.find('div.panel-footer');
        body.slideToggle(300);
        footer.slideToggle(200);

        // Toggle icon from up to down
        icon.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
        hpanel.toggleClass('').toggleClass('panel-collapse');
        setTimeout(function () {
            hpanel.resize();
            hpanel.find('[id^=map-]').resize();
        }, 50);
    });

    // Handle panel close
    $('.panel-close').on('click', function(event){
        event.preventDefault();
        var hpanel = $(event.target).closest('div.panel');
        hpanel.remove();
    });
    
    // START Rozwijanie bocznego menu w zależności od pierwszego segmentu URL'a
    var pathName = window.location.pathname;
    var controlerName = pathName.split('/')[2];
    var methodName = pathName.split('/')[3];


    if(controlerName === 'dashboard') {
        $('#dashboard-menu').addClass('active');
        if(methodName === 'monitoring') {
            $('#dashboard-monitoring-menu').addClass('active');
        }
    } else if(controlerName === 'client') {
        $('#client-menu').addClass('active');
        $('#client-submenu').addClass('in');
        if(methodName === 'add') {
            $('#client-submenu-add').addClass('active');
        } else if(methodName === 'all') {
            $('#client-submenu-all').addClass('active');
        }
    } else if(controlerName === 'insurance') {
        $('#client-menu').addClass('active');
        $('#client-submenu').addClass('in');
    } else if(controlerName === 'company') {
        $('#company-menu').addClass('active');
        $('#company-submenu').addClass('in');
        if(methodName === 'add') {
            $('#company-submenu-add').addClass('active');
        } else if(methodName === 'all') {
            $('#company-submenu-all').addClass('active');
        }
    } else if(controlerName === 'product') {
        $('#company-menu').addClass('active');
        $('#company-submenu').addClass('in');
    } else if(controlerName === 'message') {
        $('#message-menu').addClass('active');
        $('#message-submenu').addClass('in');
        if(methodName === 'add_email') {
            $('#message-submenu-add-email').addClass('active');
        } else if(methodName === 'add_sms') {
            $('#message-submenu-add-sms').addClass('active');
        }
    } 
    // END Rozwijanie bocznego menu w zależności od pierwszego segmentu URL'a
});