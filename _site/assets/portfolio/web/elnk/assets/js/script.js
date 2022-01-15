jQuery.fn.getPath = function () {
    if(this.length != 1) return;
    var path, node = this;
    if(node[0].id) return "#" + node[0].id;
    while(node.length) {
        var realNode = node[0],
            name = realNode.localName;
        if(!name) break;
        name = name.toLowerCase();
        var parent = node.parent();
        var siblings = parent.children(name);
        if(siblings.length > 1) {
            name += ':eq(' + siblings.index(realNode) + ')';
        }
        path = name + (path ? '>' + path : '');
        node = parent;
    }
    return path;
};
$(document).ready(function () {
    var freezeVp = function (e) {
        e.preventDefault();
    };

    function stopBodyScrolling(bool) {
        if(bool === true) {
            document.body.addEventListener("touchmove", freezeVp, false);
        } else {
            document.body.removeEventListener("touchmove", freezeVp, false);
        }
    }

    //CTA overlay News & Updates
    var blocks = 3;
    for (var i = 1; i < blocks + 1; i++) {
        $('.block-' + i).hover
          (function() {
            $(this).find(".news-hover-card__overlay").removeClass("hidden");
          }, function() {
            $(this).find(".news-hover-card__overlay").addClass("hidden");
          }
        );
    }

    // Info Block Hover Section
    var blocks = 3;
    for (var i = 1; i < blocks + 1; i++) {
        $('.block-' + i).hover
          (function() {
            $(this).find(".info-block-hover__block__overlay").removeClass("hidden");
          }, function() {
            $(this).find(".info-block-hover__block__overlay").addClass("hidden");
          }
        );
    }

    // contact social Section
    var blocks = 2;
    for (var i = 1; i < blocks + 1; i++) {
        $('.block-' + i).hover
          (function() {
            $(this).find(".contact-social__block__overlay").removeClass("hidden");
          }, function() {
            $(this).find(".contact-social__block__overlay").addClass("hidden");
          }
        );
    }

    //Desktop menu dropdown
    $('.submenu-desktop, .main-item .icn').hide();
    $(".el-menu ul li").hover(function () {
        if($(this).has('.submenu-desktop'.length)) {
            $('.icn', this).css({
                display: 'block'
            });
            $('.submenu-desktop', this).slideDown(200);
        }
    }, function () {
        if($(this).has('.submenu-desktop'.length)) {
            $('.icn', this).css({
                display: 'none'
            });
            $('.submenu-desktop', this).hide();
        }
    });
    $('.services-slider .scroll-hide li').hover(function () {
        $('img', this).removeClass('active');
        $('img.service--hover', this).addClass('active');
        var $this = this;
        setTimeout(function () {
            $('img.service--hover', $this).addClass('hover');
        }, 1);
    }, function () {
        $('img', this).addClass('active');
        $('img.service--hover', this).removeClass('hover').removeClass('active');
    });
    setTimeout(function () {
        $('.scroll-hide').removeClass('scrollOut');
    }, 250);
    setTimeout(function () {
        $('.sk-folding-cube__wrapper').fadeOut();
    }, 1000);
    //Mobile menu dropdown
    if (document.getElementById('mp-menu') && mlPushMenu) {
        new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'), {
            type: 'cover'
        });
    }
    $('.full-height').click(function (e) {
        var container = $('.submenu-desktop, .main-item .icn');
        // if the target of the click isn't the input tag close the modal
        if(!container.is(e.target) && container.has(e.target).length === 0) {
            $('.submenu-desktop, .main-item .icn').slideUp();
        }
    });
    //Search modal functionality
    $('.search a').click(function () {
        $('#search-modal').slideDown();
        $('body').css({
            overflow: 'hidden',
            height: '100vh',
            position: 'fixed'
        });
        stopBodyScrolling(true);
    });
    $('#search-modal').click(function (e) {
        var container = $('#search-modal input, a, button');
        // if the target of the click isn't the input tag close the modal
        if(!container.is(e.target) && container.has(e.target).length === 0) {
            $('#search-modal').slideUp();
            $('body').css({
                overflow: '',
                height: '',
                position: ''
            });
            stopBodyScrolling(false);
        }
    });
    $('.location-button').click(function (e) {
        $('#postal-code-modal').slideDown();
        $('body').css({
            overflow: 'hidden',
            height: '100vh',
            position: 'fixed'
        });
        stopBodyScrolling(true);
    });
    //modal functionality
    // $('.modal__wrapper').slideDown();
    $('.modal__wrapper').click(function (e) {
        var container = $('.modal__wrapper .modal__content');
        // if the target of the click isn't the input tag close the modal
        if(!container.is(e.target) && container.has(e.target).length === 0) {
            $(this).slideUp();
            $('body').css({
                overflow: '',
                height: '',
                position: ''
            });
            stopBodyScrolling(false);
        }
    });
    $('.modal__content__hemisphere').hover(function (e) {
        $(this).find('.modal__content__hemisphere__overlay').fadeIn();
    }, function (e) {
        $(this).find('.modal__content__hemisphere__overlay').fadeOut();
    });
    //Tabs
    $('.tab-content').hide();
    $('.tab-content[data-src="1"]').show();
    if($('.tab-content[data-src="1"]').hasClass("tab-content--white")) {
        $('.tab-content[data-src="1"]').closest('.product-internet-feature-container__block').addClass('product-internet-feature-container__block--white');
    } else {
        $('.tab-content[data-src="1"]').closest('.product-internet-feature-container__block').removeClass('product-internet-feature-container__block--white');
    }
    $('.tabs ul li').click(function () {
        var tabID = $(this).attr('id');
        $('.tab-content').hide();
        $('.tabs ul li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content[data-src="' + tabID + '"]').show();
        if($('.tab-content[data-src="' + tabID + '"]').hasClass("tab-content--white")) {
            $(this).closest('.product-internet-feature-container__block').addClass('product-internet-feature-container__block--white');
        } else {
            $(this).closest('.product-internet-feature-container__block').removeClass('product-internet-feature-container__block--white');
        }
    });
    //Details
    $('.detail-content').hide();
    $('.details .expand').click(function () {
        $(this).parents().children('.detail-content').slideToggle();
        var link = $(this).children('.icon');
        $(this).children('.icon').toggleClass('minus')
    });
    // HS Split into promotions Section
    $(".hs-split-into-promo__left").hover(function () {
        $(".hs-split-into-promo__left__overlay").addClass("active");
    }, function () {
        $(".cta-block-text-hover__left__overlay").removeClass("active");
    });
    if (!isMobile()) {
        $(".cta-block-text-hover__right").hover(function () {
            $(".cta-block-text-hover__right__overlay").addClass("active");
        }, function () {
            $(".cta-block-text-hover__right__overlay").removeClass("active");
        });
        $(".cta-block-text-hover__left").hover(function () {
            $(".cta-block-text-hover__left__overlay").addClass("active");
        }, function () {
            $(".cta-block-text-hover__left__overlay").removeClass("active");
        });
    } else {
        $(".cta-block-text-hover__right").click(function () {
            $(".cta-block-text-hover__right__overlay", this).toggleClass('active');
        });

        $(".cta-block-text-hover__left").click(function () {
            $(".cta-block-text-hover__left__overlay", this).toggleClass('active');
        });
    }


    var scrollTimeout;
    $(window).on('scroll', function () {
        if(!scrollTimeout) {
            scrollTimeout = setTimeout(function () {
                var toolbarHeight = $('.el-toolbar-menu').height();
                var scrollTop = $(this).scrollTop();
                if(scrollTop >= 100 + toolbarHeight + 1) {
                    $('.header').css({
                        marginTop: (-1) - toolbarHeight + "px"
                    });
                    $('.el-menu').addClass('scroll');
                    $('.header').addClass('scroll');
                } else {
                    $('.header').css({
                        marginTop: ""
                    });
                    $('.el-menu').removeClass('scroll');
                    $('.header').removeClass('scroll');
                }
                scrollTimeout = null;
            }, 50);
        }
    });

    function resizeHeader() {
        $('.content.clearfix').css({
            marginBottom: $('.header').height()
        });
    }
    $(window).on('resize', resizeHeader);
    resizeHeader();
    /********************************************************************************
     * Disable rubber band (c)2013 - Mark van Wijnen | www.CrystalMinds.nl
     ********************************************************************************/
    var scrollY = 0;
    $(document).on('touchstart', function (e) {
        scrollY = e.originalEvent.touches.item(0).clientY;
    });
    $(document).on('touchmove', function (e) {
        var scrollDelta = scrollY - e.originalEvent.touches.item(0).clientY;
        if($(e.target).closest('.hero-wrapper').length && scrollDelta < 0) {
            e.preventDefault();
        }
    });

    // opens accordion on click
      $(".accordion").on("click", function(e) {
        $(this).closest('.accordion__container').find('.accordion').not($(this)).each(function() {
            $(this).addClass('accordion--closed');
            $(this).find( 'i' ).removeClass('icon--plus--rotate');
        });
        $(this).toggleClass('accordion--closed');
        $(this).find( 'i' ).toggleClass('icon--plus--rotate');
        e.preventDefault();
      });

      $(".accessibility-accordion").on("click", function(e) {
        //   console.log('clicked');
        $(this).closest('.accessibility-accordion__container').find('.accessibility-accordion').not($(this)).each(function() {
            $(this).addClass('accessibility-accordion--closed');
            $(this).find( 'i' ).removeClass('icon--plus--rotate');
        });
        $(this).toggleClass('accessibility-accordion--closed');
        $(this).find( 'i' ).toggleClass('icon--plus--rotate');
        e.preventDefault();
      });

      $(".accordion-feature").on("click", function(e) {
        e.preventDefault();

        $(this).closest('.accordion__container').find('.accordion-feature').not($(this)).each(function() {
            $(this).addClass('accordion-feature--closed');
            $(this).find( 'i' ).removeClass('icon--plus--rotate');
        });
        $(this).toggleClass('accordion-feature--closed');
        $(this).find( '.icon--plus--small' ).toggleClass('icon--plus--rotate');

      });

      $(".accordion-legal").on("click", function() {
        $(this).toggleClass('accordion-legal--closed');
        $(this).find( '.icon-plus' ).toggleClass('icon-plus--rotate');
      });

      $('.view-details').on("click", function() {
            $(this).find( '.icon-plus' ).toggleClass('icon-plus--rotate');
      });

      $('[data-toggleable-toggle]').click(function(event){
        var el = $(event.target || event.currentTarget),
            toggleable = el.closest('[data-toggleable]'),
            toggle = toggleable.find("." + toggleable.attr('data-toggleable-target')+":first");
        if(toggleable.length === 0) {
          return true;
        }

        toggle.slideToggle();
        toggleable.toggleClass(toggleable.attr('data-toggleable-class'));
        event.preventDefault();
      });

    document.addEventListener('touchmove', function (event) {
        if (event.scale !== 1) { event.preventDefault(); }
    }, false);


    // Sidebar Menu icon Toggle
        $('.sidebar-nav__list__item__link').on("click", function(event) {
            $(this).next().toggleClass('hidden');
            $(this).find('.icon-sub-1').toggleClass('rotate-sub-1');
            event.preventDefault();
        });

        $('.sub-list__item__link').on("click", function(e) {
            $(this).next().toggleClass('hidden');
            $(this).find('.icon-sub-2').toggleClass('rotate-sub-2');
            event.preventDefault();
            e.preventDefault();
        });

        // datepicker
        $('[data-toggle="datepicker"]').datepicker();


}); // end document.ready



function isMobile(width) {
    if(width == undefined) {
        width = 960;
    }
    if(window.innerWidth <= width) {
        return true;
    } else {
        return false;
    }
}
