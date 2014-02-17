function setHeaderDefaults() {
    $('img').bind('contextmenu', function (e) {
        return false;
    });
}

function setMobileNavigation() {
    if ($('#mobile-nav-button-minus').is(":visible")) {
        $('#mobile-tab-nav').show();
    } else {
        $('#mobile-tab-nav').hide();
    }
    $('#mobile-nav-button-minus').click(function () {
        $('#mobile-tab-nav').hide();
        $('#mobile-nav-button-plus').show();
        $('#mobile-nav-button-minus').hide();
    });
    $('#mobile-nav-button-plus').click(function () {
        $('#mobile-tab-nav').show();
        $('#mobile-nav-button-minus').show();
        $('#mobile-nav-button-plus').hide();
    });
    $(window).resize(function() {
        if ($(window).width() <= 700) {
            $('#mobile-tab-nav').hide();

            $('#mobile-nav-button-minus').hide().click(function () {
                $('#mobile-tab-nav').hide();
                $('#mobile-nav-button-plus').show();
                $('#mobile-nav-button-minus').hide();
            });
            $('#mobile-nav-button-plus').show().click(function () {
                $('#mobile-tab-nav').show();
                $('#mobile-nav-button-minus').show();
                $('#mobile-nav-button-plus').hide();
            });
        } else {
            $('#mobile-tab-nav').hide();
        }
    });
}

function setMobileServicePageLinks() {
    $('.mark-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#marketing-content').show();
        return false;
    });
    $('.host-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#hosting-content').show();
        return false;
    });
    $('.design-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#design-content').show();
        return false;
    });
    $('.dev-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#dev-content').show();
        return false;
    });
}

function removeLinks() {

    $('.service-image > a').attr('title', 'Kind Technology Services').click(function() {
       return false;
    });

}