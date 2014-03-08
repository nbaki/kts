/**
 * @author Nasem Baki <nbaki@kindtechnj.com>
 * @version 2.0
 */
function setHeaderDefaults() {
    $('img').bind('contextmenu', function (e) {
        return false;
    });
    $('.tabs li:first').attr("id", "home");
    $('.tabs li a').attr("class", "menu_link");
    var listItems = $(".tabs li");
    listItems.each(function(index, li) {
       var menu_title = $(li).text().trim().toLowerCase();
       menu_title = menu_title.replace(" ", "_");
       var anchor = $(li).find("a");
       $(anchor).attr("id", menu_title+"_link");
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

function setActiveTab(page) {
    if (page == 'Home') {
        $('#home_link').css('padding-bottom', 7);
        $('#home_link').css('border-bottom', 0);
        $('.page-container').css('border-bottom', '10px solid #8cc63f');
    }
    else if (page == 'About Us') {
            $('#about_us_link').css('padding-bottom', 7);
            $('#about_us_link').css('border-bottom', 0);
            $('.page-container').css('border-bottom', '10px solid #8cc63f');
    }
    else if (page == 'Our Process') {
            $('#our_process_link').css('padding-bottom', 7);
            $('#our_process_link').css('border-bottom', 0);
            $('.page-container').css('border-bottom', '10px solid #8cc63f');
    }
    else if (page == 'Services') {
            $('#services_link').css('padding-bottom', 7);
            $('#services_link').css('border-bottom', 0);
            $('.page-container').css('border-bottom', '10px solid #8cc63f');
    }
    else if (page == 'Contact Us') {
            $('#contact_us_link').css('padding-bottom', 7);
            $('#contact_us_link').css('border-bottom', 0);
            $('.page-container').css('border-bottom', '10px solid #8cc63f');
    }
}

function processQuestions() {
    $('#q1').click(function () {
        if ($('#a1').is(":visible")) {
            $('#a1').hide();
        } else {
            $('#a1').show();
            $('#a1 p').css("color", "#0066CC");
        }
        return false;
    });
    $('#q2').click(function () {
        if ($('#a2').is(":visible")) {
            $('#a2').hide();
        } else {
            $('#a2').show();
            $('#a2 p').css("color", "#0066CC");
        }
        return false;
    });
    $('#q3').click(function () {
        if ($('#a3').is(":visible")) {
            $('#a3').hide();
        } else {
            $('#a3').show();
            $('#a3 p').css("color", "#0066CC");
        }
        return false;
    });
}

function ieStyle() {
    $('.mobile-services').show().css('text-align', 'center').css('list-style-type', 'none');
    $('.service-table').hide();
    $('#process-flow').hide();
    $('#checklist-guy').hide();
    $('#contact-info').hide();
    $('#mobile-contact-info').show();
}