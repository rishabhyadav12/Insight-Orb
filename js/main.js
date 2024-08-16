(function ($) {
    "use strict";

    // Sticky Navbar
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 40) {
    //         $('.navbar').addClass('sticky-top');
    //     } else {
    //         $('.navbar').removeClass('sticky-top');
    //     }
    // });


    $(document).ready(function () {
        var btn = $('#affixBtn').hide();
        $(window).scroll(function () {
            if ($(window).scrollTop() > 250) {
                $('#affixBtn').slideDown('slow');
            }
            else {
                $('#affixBtn').slideUp('slow');
            }
        });
    });

    $(document).ready(function () {
        $('.btn-Search').click(function () {
            $('.index-search').toggle('slow');
        });
    });


    $(document).ready(function () {
        if (window.matchMedia("(min-width:320px) and (max-width: 480px)").matches) {
            $('.expandFooter1').click(function () {
                $('.show_me1').toggle('slow');
            });
            $('.expandFooter2').click(function () {
                $('.show_me2').toggle('slow');
            });
            $('.expandFooter3').click(function () {
                $('.show_me3').toggle('slow');
            });
            $('.expandFooter4').click(function () {
                $('.show_me4').toggle('slow');
            });
        }
    });


    /* report view hide code */
    $(".hidden_page").css("display", "none"), $(".c1").click(function () {
		$(".hidden_page").slideToggle(function () {
			"block" == $(".hidden_page").css("display") ? ($("#view_more").css("display", "none"), $("#close").css("display", "block"), $("#close").addClass("close_icon-2")) : ($("#close").css("display", "none"), $("#close").removeClass("close_icon-2"), $("#view_more").css("display", "block"))
		})
	});

      
    /* Changed here for tablet view */
    $(document).ready(function () {
        if (window.matchMedia('(min-width:481px) and (max-width: 1080px)').matches) {
            $('.expandFooter1').click(function () {
                $('.show_me1').toggle('slow');
            });
            $('.expandFooter2').click(function () {
                $('.show_me2').toggle('slow');
            });
            $('.expandFooter3').click(function () {
                $('.show_me3').toggle('slow');
            });
            $('.expandFooter4').click(function () {
                $('.show_me4').toggle('slow');
            });
        }
    });


    // $(document).ready(function () {
    //     if (window.matchMedia('(min-width:320px) and (max-width: 480px)').matches) {
    //         $(window).scroll(function () {
    //             $(".rd-left-industry1").css('display', 'none');
    //         });

    //     }
    // });


    $(document).ready(function () {
        $('#search_pr').keydown(function () {
            $('#report_search_section').css('display', 'block');
        });
        
    });

    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // // Back to top button
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 100) {
    //         $('.back-to-top').fadeIn('slow');
    //     } else {
    //         $('.back-to-top').fadeOut('slow');
    //     }
    // });
    // $('.back-to-top').click(function () {
    //     $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    //     return false;
    // });
    
    // $(window).scroll(function () {
    //     $(".rd-left-industry1").toggle($(window).scrollTop() < 2500);
    // });


    $('.io-button').click(function () {
        var target = $(this).data('target');
        $('.io-button').removeClass('active');
        $(this).addClass('active');
        $('.content').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('.rd-tab').click(function () {
        var target = $(this).data('target');
        $('.rd-tab').removeClass('active');
        $(this).addClass('active');
        $('.rd-block').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('.sitemap-tab').click(function () {
        var target = $(this).data('target');
        $('.sitemap-tab').removeClass('active');
        $(this).addClass('active');
        $('.sitemap-block').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('.search-listing-tab').click(function () {
        var target = $(this).data('target');
        $('.search-listing-tab').removeClass('active');
        $(this).addClass('active');
        $('.search-list-block').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('.io-cookieAccept').click(function () {
        $('#io-cookie').css('display', 'none');
    });

    $(".accordion-header").click(function () {
        $(".accordion-body").is(":visible") && ($(".accordion-body").slideUp(300), $(".plus-symbol").text("🞃")), $(this).next(".accordion-body").is(":visible") ? ($(this).next(".accordion-body").slideUp(300), $(this).children(".plus-symbol").text("🞃")) : ($(this).next(".accordion-body").slideDown(300), $(this).children(".plus-symbol").text("🞁"))
    });

    $(".faq-accordion-header").click(function () {
        $(".faq-accordion-body").is(":visible") && ($(".faq-accordion-body").slideUp(300), $(".faq-plus-symbol").text("🞃")), $(this).next(".faq-accordion-body").is(":visible") ? ($(this).next(".faq-accordion-body").slideUp(300), $(this).children(".plus-symbol").text("🞃")) : ($(this).next(".faq-accordion-body").slideDown(300), $(this).children(".faq-plus-symbol").text("🞁"))
    });

})(jQuery);

