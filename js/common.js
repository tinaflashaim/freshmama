( function ( $ ) {
    // Create a new instance of Slidebars
    var controller = new slidebars();
    controller.init();

    // Right Slidebar controls
    $( '.js-open-right-slidebar' ).on( 'click', function ( event ) {
        event.stopPropagation();
        controller.open( 'sb-right' );
        $('.slider-c').get(0).slick.setPosition();
    } );

    $( '.js-close-right-slidebar' ).on( 'click', function ( event ) {
        event.stopPropagation();
        controller.close( 'sb-right' );
    } );

    // Close any
    $( controller.events ).on( 'opened', function () {
        $( '[canvas="container"]' ).addClass( 'js-close-any-slidebar' );
    } );

    $( controller.events ).on( 'closed', function () {
        $( '[canvas="container"]' ).removeClass( 'js-close-any-slidebar' );
    } );

    $( 'body' ).on( 'click', '.js-close-any-slidebar', function ( event ) {
        event.stopPropagation();
        controller.close();
    } );

} ) ( jQuery );


// image swap on hover
var sourceSwap = function () {
    var $this = $(this).children().children();
    var newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
}

$(function() {
    $('.js-imgswap').each(function() { 
        new Image().src = $(this).children().children().attr('data-alt-src'); 
    }).hover(sourceSwap, sourceSwap);
});


// login modal
var LoginModalController = {
    tabsElementName: ".logmod__tabs li",
    tabElementName: ".logmod__tab",
    inputElementsName: ".logmod__form .input",
    
    inputElements: null,
    tabsElement: null,
    tabElement: null,
    
    activeTab: null,
    tabSelection: 0, // 0 - first, 1 - second
    
    findElements: function () {
        var base = this;
        
        base.tabsElement = $(base.tabsElementName);
        base.tabElement = $(base.tabElementName);
        base.inputElements = $(base.inputElementsName);
        
        return base;
    },
    
    setState: function (state) {
        var base = this,
            elem = null;
        
        if (!state) {
            state = 0;
        }
        
        if (base.tabsElement) {
            elem = $(base.tabsElement[state]);
            elem.addClass("current");
            $("." + elem.attr("data-tabtar")).addClass("show");
        }
  
        return base;
    },
    
    getActiveTab: function () {
        var base = this;
        
        base.tabsElement.each(function (i, el) {
           if ($(el).hasClass("current")) {
               base.activeTab = $(el);
           }
        });
        
        return base;
    },
   
    addClickEvents: function () {
        var base = this;
 
        base.tabsElement.on("click", function (e) {
            var targetTab = $(this).attr("data-tabtar");
            
            e.preventDefault();
            base.activeTab.removeClass("current");
            base.activeTab = $(this);
            base.activeTab.addClass("current");
            
            base.tabElement.each(function (i, el) {
                el = $(el);
                el.removeClass("show");
                if (el.hasClass(targetTab)) {
                    el.addClass("show");
                }
            });
        });
        
        base.inputElements.find("label").on("click", function (e) {
           var $this = $(this),
               $input = $this.next("input");
            
            $input.focus();
        });
        
        return base;
    },
    
    initialize: function () {
        var base = this;
        
        base.findElements().setState().getActiveTab().addClickEvents();
    }
};

$(document).ready(function() {
    LoginModalController.initialize();
});
// login modal end


$(document).ready(function(){

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    $("img").lazyload();

    // main menu hover dropdown
    $("ul.nav li.dropdown").hover(function() {
        $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeIn(200);
    }, function() {
        $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeOut(200);
    });

    // sub menu toggle
    $(".js-menu-toggle > i.fa-angle-up").hide();
    $(".js-menu-toggle").click(function(){
            var $icon= $(this).find("i");
            $('.js-menu-show').slideToggle();
            $(this).find(".fa-angle-up, .fa-angle-down").toggle();
    });

    // slick slider setting
    $('.js-banner').slick({
        dots: true,
        lazyLoad: 'ondemand'
      });
       $('.js-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.js-slider-nav',
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
        ]
      });
      $('.js-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.js-slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true
      });

    // // footer
    // var docHeight = $(window).height();
    // var footerHeight = $( "#footer" ).outerHeight();
    // var footerTop = $("#footer").offset().top + footerHeight;

    // if (footerTop < docHeight) {
    // $("#footer").css("margin-top", (docHeight - footerTop) + "px");
    // }

    // scrollup
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".scrollup").fadeIn()
        } else {
            $(".scrollup").fadeOut()
        }
    });
    $(".scrollup").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false
    })

});