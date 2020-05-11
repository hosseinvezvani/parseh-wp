/////////////////////////////////sticky menu////////////////////////////////////
$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('.navbar-parseh').addClass("navbar-shrink");
    } else {
        $('.navbar-parseh').removeClass("navbar-shrink");
    }
});
/////////////////////////////////search box menu///////////////////////////////
const body = document.querySelector('body');
const searchBtn = document.querySelector('#search');
const searchInput = document.querySelector('#search-input');
let active = false;
body.addEventListener('click', (e) => {
    if (e.target.id === 'search' || e.target.id === 'search-input' || e.target.id === 'search-icon') {
        if (!active) {
            searchBtn.classList.add('active');
            searchInput.classList.add('active');
            active = true;
        }
    } else {
        searchBtn.classList.remove('active');
        searchInput.classList.remove('active');
        searchInput.value = '';
        active = false;
    }
});
/////////////////////////////////slider////////////////////////////////////////
var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: false,
    // navigation: {
    //     //     nextEl: '.next',
    //     //     prevEl: '.prev'
    //     // },
    // mousewheel: {
    //     invert: false
    // },
    // autoHeight: true,
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});
/////////////////////////////////filter-portfolio////////////////////////////////
jQuery("#portfolio-flters li").click ( function() {
    jQuery("#portfolio-flters li").removeClass('filter-active');
    jQuery(this).addClass('filter-active');

    var selectedFilter = $(this).data("filter");
    jQuery("#portfolio-wrapper").fadeTo(100, 0);

    jQuery(".portfolio-item").fadeOut().css('transform', 'scale(0)');

    setTimeout(function() {
        jQuery(selectedFilter).fadeIn(100).css('transform', 'scale(1)');
        jQuery("#portfolio-wrapper").fadeTo(400, 1);
    }, 400);
});
/////////////////////////////////tab///////////////////////////////////////////
$('#myTab a').on('click', function (e) {
    e.preventDefault();
    $(this).tab('show')
});
/////////////////////////////////video////////////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
    const player=new Plyr("#player");

    // Expose
    window.player = player;

    // Bind event listener
    function on(selector, type, callback) {
        document.querySelector(selector).addEventListener(type, callback, false);
    }

    // Play
    on('.js-play', 'click', () => {
        player.play();
    });

    // Pause
    on('.js-pause', 'click', () => {
        player.pause();
    });

    // Stop
    on('.js-stop', 'click', () => {
        player.stop();
    });

    // Rewind
    on('.js-rewind', 'click', () => {
        player.rewind();
    });

    // Forward
    on('.js-forward', 'click', () => {
        player.forward();
    });
});
/////////////////////////////////blog////////////////////////////////////////
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";
    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });
    ResCarouselSize();
    $(window).resize(function () {
        ResCarouselSize();
    });
    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);
            if (bodyWidth >= 1200) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");
        });
    }
    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
/////////////////////////////////tooltip////////////////////////////////////////
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
///////////////////////////////lightbox////////////////////////////////////////
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
        alwaysShowClose: true,
        onShown: function() {
            console.log('Checking our the events huh?');
        }
    });
});
///////////////////////////////Back to top scroll////////////////////////////////////////
$('#button').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 3300);
    });
/////////# start sourceMappingURL=bundle.js.map////////////////////////////////////////


