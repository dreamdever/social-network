$(function() {

    /*$(document).bind("contextmenu",function(e){
        return false;
    });*/

    /**
     * SCROLL
     */
    var menu     = $('#nav'),
        menuLink = menu.find('a');

    menuLink.on('click', function(event) {

        var id = this.hash;

        $('html, body').animate({ scrollTop: $(id).offset().top }, 1000, function() {

            window.location.hash = id;

        });

        event.preventDefault();

    });

    /**
     * SCROLL TO TOP
     */
    var backToTop = $('<a>', {
                          href: '#home',
                          class: 'back-to-top',
                          html: '<i class="fa fa-caret-up fa-5x"></i> '   
                        });

    backToTop
            .hide()
            .appendTo('body')
            .on('click', function() {
                $('html').animate({ scrollTop: 0 });
            });

    var win = $(window);
    win.on('scroll', function() {
        if( win.scrollTop() >= 200 ) backToTop.fadeIn();
        else backToTop.hide();
    }); 
     

    /**
     * NAVIGATION
     */
    var mobileButton = $('#mobile-nav'),
        navigation   = $('#nav');

    mobileButton.on('click', function() {

        $(this).toggleClass('is-active');

        setTimeout(function() {
            navigation.toggleClass('item-block')
                      .animate({
                        opacity: 1
                      });
        }, 250);

        if( !navigation.hasClass('item-block') ) {
            navigation.css({ 'opacity' : 0 })
        }
        
    });

        $( window ).resize(function () { 
            
            if( $( window ).width() > 680 ) {
                mobileButton.removeClass('is-active');
                navigation.removeClass('item-block');
            }

        });


});