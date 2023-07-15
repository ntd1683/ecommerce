import $ from 'jquery';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

$("input[type=date]").click((e) => {
    e.target.showPicker();
});

window.addEventListener('load', () => {
    let iconPassword = document.querySelectorAll('.show-password')
    iconPassword.forEach((each) => {
        each.addEventListener('click', () => {
            let parent = each.parentNode.querySelector('input')
            if(parent.getAttribute('type') === "text") {
                parent.setAttribute('type', 'password')
            } else {
                parent.setAttribute('type', 'text')
            }
        })
    })
})

function setCookie(name, value, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

var $window = $(window),
    $body = $("body");

// banner on top
$('#button-banner-notify').click(() => {
    $('#banner-notify').css('display', 'none');
    setCookie('bannerNotify', 'yes', 1000);
});

if(getCookie('bannerNotify') !== "") {
    if($('#banner-notify').length) {
        $('#banner-notify').css('display', 'none');
    }
}
// Privacy Cookie
$('.button-privacy').click(() => {
    $('#privacy').css('display', 'none');
    setCookie('privacyCookie', 'yes', 1000)
});

if(getCookie('privacyCookie') !== "") {
    if($('#privacy').length) {
        $('#privacy').css('display', 'none');
    }
}
/*----------------------------------
# header sticky
-----------------------------------*/

var activeSticky = $("#sticky-header"),
    $winDow = $($window);
$winDow.on("scroll", function () {
    var scroll = $($window).scrollTop(),
        isSticky = activeSticky;

    if (scroll < 1) {
        isSticky.removeClass("is-sticky");
    } else {
        isSticky.addClass("is-sticky");
    }
});

//  Off Canvas toggler Function
var $offCanvasToggle = $(".offcanvas-toggle"),
    $offCanvas = $(".offcanvas"),
    $offCanvasOverlay = $(".offcanvas-overlay"),
    $mobileMenuToggle = $(".mobile-menu-toggle");
$offCanvasToggle.on("click", function (e) {
    e.preventDefault();
    var $this = $(this),
        $target = $this.attr("href");
    $body.addClass("offcanvas-open");
    $($target).addClass("offcanvas-open");
    $offCanvasOverlay.fadeIn();

    if ($this.parent().hasClass("mobile-menu-toggle")) {
        $this.addClass("close");
    }
});
$(".offcanvas-close, .offcanvas-overlay").on("click", function (e) {
    e.preventDefault();
    $body.removeClass("offcanvas-open");
    $offCanvas.removeClass("offcanvas-open");
    $offCanvasOverlay.fadeOut();
    $mobileMenuToggle.find("a").removeClass("close");
});

// Off Canvas Menu

function mobileOffCanvasMenu() {
    var $offCanvasNav = $(".offcanvas-menu, .overlay-menu"),
        $offCanvasNavSubMenu = $offCanvasNav.find(".offcanvas-submenu");
    /*Add Toggle Button With Off Canvas Sub Menu*/

    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"></span>');
    /*Category Sub Menu Toggle*/

    $offCanvasNav.on("click", "li a, .menu-expand", function (e) {
        var $this = $(this);

        if ($this.attr("href") === "#" || $this.hasClass("menu-expand")) {
            e.preventDefault();

            if ($this.siblings("ul:visible").length) {
                $this.parent("li").removeClass("active");
                $this.siblings("ul").slideUp();
                $this.parent("li").find("li").removeClass("active");
                $this.parent("li").find("ul:visible").slideUp();
            } else {
                $this.parent("li").addClass("active");
                $this
                    .closest("li")
                    .siblings("li")
                    .removeClass("active")
                    .find("li")
                    .removeClass("active");
                $this.closest("li").siblings("li").find("ul:visible").slideUp();
                $this.siblings("ul").slideDown();
            }
        }
    });
}

mobileOffCanvasMenu();

// Modal

//  modal toggler Function

var $modalToggle = $(".modal-toggle"),
    $modal = $(".modal"),
    $modalOverlay = $(".modal-overlay"),
    $modalMenuToggle = $(".modal-menu-toggle");
$modalToggle.on("click", function (e) {
    e.preventDefault();
    var $this = $(this),
        $target = $this.attr("href");
    $body.addClass("modal-open");
    $($target).addClass("modal-open");
    $modalOverlay.fadeIn();

    if ($this.parent().hasClass("modal-menu-toggle")) {
        $this.addClass("close");
    }
});
$(".modal-close, .modal-overlay").on("click", function (e) {
    e.preventDefault();
    $body.removeClass("modal-open");
    $modal.removeClass("modal-open");
    $modalOverlay.fadeOut();
    $modalMenuToggle.find("a").removeClass("close");
});

// click out side to close popup menu

let open = false;

let openSidebar = function () {
    $("#settings-card").css({
        top: "70px",
        visibility: "visible",
        opacity: "1",
    });

    open = true;
};
let closeSidebar = function () {
    $("#settings-card").css({
        top: "70px",
        visibility: "hidden",
        opacity: "0",
    });

    open = false;
};

$(".toggle-menu").on("click", function (event) {
    event.stopPropagation();
    let toggle = open ? closeSidebar : openSidebar;
    toggle();
});

$(document).on("click", function (event) {
    if (!$(event.target).closest("#settings-card").length) {
        closeSidebar();
    }
});

// click out side to close drone popup

document.querySelectorAll(".drone-toggle").forEach(function (ele) {
    ele.addEventListener("click", function () {
        const siblings = ele.parentElement.parentElement.children;

        Array.from(siblings, (sib) => {
            const menuCard = sib.querySelector(".menu-card");
            if (menuCard) menuCard.classList.add("invisible", "opacity-0");
        });

        if (ele.parentElement.lastElementChild.classList.contains("invisible")) {
            this.parentElement.lastElementChild.classList.add("invisible");
            this.parentElement.lastElementChild.classList.add("opacity-0");

            ele.parentElement.lastElementChild.classList.remove("invisible");
            ele.parentElement.lastElementChild.classList.remove("opacity-0");
        }
    });
});

$(".close-drone").on("click", function () {
    $(".menu-card").addClass("opacity-0 invisible");
    $(".menu-card").removeClass("visible opacity-1");
});

// search

$(".search-toggle").on("click", function () {
    $(".search-form").css({ transform: "translatex(0px)" });
});

$(".search-close").on("click", function () {
    $(".search-form").css({ transform: "translatex(100%)" });
});

var $settingsMenu = $("#settings-menu li a");
$settingsMenu.on("click", function (e) {
    e.preventDefault();
    $(this).closest("li").toggleClass("active");
    $(this).closest("li").siblings().removeClass("active");
    $(this).closest("li").siblings().children(".sub-category").slideUp();
    $(this)
        .closest("li")
        .siblings()
        .children(".sub-category")
        .children("li")
        .toggleClass("active");
    $(this)
        .closest("li")
        .siblings()
        .children(".sub-category")
        .children("li")
        .removeClass("active");
    $(this).parent().children(".sub-category").slideToggle();
});


/*-----------------------------------
# hero-slider
------------------------------ */

var heroSlider = new Swiper(".hero-slider .swiper-container", {
    modules: [Navigation, Pagination],
    loop: true,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    pagination: {
        el: ".hero-slider .swiper-pagination",
        clickable: true,
    },

    // navigation: {
    //   nextEl: ".hero-slider .swiper-button-next",
    //   prevEl: ".hero-slider .swiper-button-prev",
    // },
    navigation: false,
});

var Testimonial = new Swiper(".testimonial .swiper-container", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    // pagination: {
    //   el: ".testimonial .swiper-pagination",
    //   clickable: true,
    // },
    pagination: false,
    navigation: {
        nextEl: ".testimonial .swiper-button-next",
        prevEl: ".testimonial .swiper-button-prev",
    },
});


/*-----------------------------------
# product carousel
------------------------------ */

var ProductCarousel = new Swiper(".product-carousel .swiper-container", {
    modules: [Navigation, Pagination],
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    pagination: false,

    navigation: {
        nextEl: ".product-carousel .swiper-button-next",
        prevEl: ".product-carousel .swiper-button-prev",
    },

    breakpoints: {
        // when window width is >= 320px
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        // when window width is >= 480px
        576: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

/*-----------------------------------
# product2 carousel
------------------------------ */

var ProductCarousel2 = new Swiper(".product-carousel2 .swiper-container", {
    modules: [Navigation, Pagination],
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    pagination: false,

    navigation: {
        nextEl: ".product-carousel2 .swiper-button-next",
        prevEl: ".product-carousel2 .swiper-button-prev",
    },

    breakpoints: {
        // when window width is >= 320px
        0: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        576: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});
/*-----------------------------------
# team carousel
------------------------------ */

var TeamCarousel = new Swiper(".team-carousel .swiper-container", {
    modules: [Navigation, Pagination],
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    pagination: false,

    navigation: {
        nextEl: ".team-carousel .swiper-button-next",
        prevEl: ".team-carousel .swiper-button-prev",
    },

    breakpoints: {
        // when window width is >= 320px
        0: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        576: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

/*-----------------------------------
# Blo carousel
------------------------------ */

var BlogCarousel = new Swiper(".blog-carousel .swiper-container", {
    modules: [Navigation, Pagination],
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    pagination: false,

    navigation: {
        nextEl: ".blog-carousel .swiper-button-next",
        prevEl: ".blog-carousel .swiper-button-prev",
    },

    breakpoints: {
        // when window width is >= 320px
        0: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        576: {
            slidesPerView: 2,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
    },
});

/*-----------------------------------
# service carousel
------------------------------ */

var BlogCarousel = new Swiper(".service-carousel .swiper-container", {
    modules: [Navigation, Pagination],
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 600,
    autoplay: false,
    lazy: true,
    fadeEffect: {
        crossFade: true,
    },
    pagination: false,

    navigation: false,

    breakpoints: {
        // when window width is >= 320px
        0: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 3,
        },
        1280: {
            slidesPerView: 3,
        },
    },
});
/*---------------------------------
      SHOP TAB - Account page
  -----------------------------------*/
const ShopTabs = function (tab) {
    function init() {
        let tabContent = $(".shop-tab-content", tab);
        let tabnav = $(".shop-tab-nav", tab);

        tabContent.not(".active").hide();
        tabnav.show();

        $("li", tabnav).on("click", function () {
            $(this).addClass("active").siblings().removeClass("active");
            tabContent.hide();
            $($("a", this).attr("href")).show();

            return false;
        });
    }

    init();
};
ShopTabs("#shoptab");

/*----------------------------------------*/
/*  Countdown
/*----------------------------------------*/
function makeTimer($endDate, $this, $format) {
    var today = new Date();
    var BigDay = new Date($endDate),
        msPerDay = 24 * 60 * 60 * 1000,
        timeLeft = BigDay.getTime() - today.getTime(),
        e_daysLeft = timeLeft / msPerDay,
        daysLeft = Math.floor(e_daysLeft),
        e_hrsLeft = (e_daysLeft - daysLeft) * 24,
        hrsLeft = Math.floor(e_hrsLeft),
        e_minsLeft = (e_hrsLeft - hrsLeft) * 60,
        minsLeft = Math.floor((e_hrsLeft - hrsLeft) * 60),
        e_secsLeft = (e_minsLeft - minsLeft) * 60,
        secsLeft = Math.floor((e_minsLeft - minsLeft) * 60);

    var yearsLeft = 0;
    var monthsLeft = 0;
    var weeksLeft = 0;

    if ($format != "short") {
        if (daysLeft > 365) {
            yearsLeft = Math.floor(daysLeft / 365);
            daysLeft = daysLeft % 365;
        }

        if (daysLeft > 30) {
            monthsLeft = Math.floor(daysLeft / 30);
            daysLeft = daysLeft % 30;
        }
        if (daysLeft > 7) {
            weeksLeft = Math.floor(daysLeft / 7);
            daysLeft = daysLeft % 7;
        }
    }

    var yearsLeft = yearsLeft < 10 ? "0" + yearsLeft : yearsLeft,
        monthsLeft = monthsLeft < 10 ? "0" + monthsLeft : monthsLeft,
        weeksLeft = weeksLeft < 10 ? "0" + weeksLeft : weeksLeft,
        daysLeft = daysLeft < 10 ? "0" + daysLeft : daysLeft,
        hrsLeft = hrsLeft < 10 ? "0" + hrsLeft : hrsLeft,
        minsLeft = minsLeft < 10 ? "0" + minsLeft : minsLeft,
        secsLeft = secsLeft < 10 ? "0" + secsLeft : secsLeft,
        yearsText = yearsLeft > 1 ? "years" : "year",
        monthsText = monthsLeft > 1 ? "months" : "month",
        weeksText = weeksLeft > 1 ? "weeks" : "week",
        daysText = daysLeft > 1 ? "days" : "day",
        hourText = hrsLeft > 1 ? "hrs" : "hr",
        minsText = minsLeft > 1 ? "mins" : "min",
        secText = secsLeft > 1 ? "secs" : "sec";

    var $markup = {
        wrapper: $this.find(".countdown__item"),
        year: $this.find(".yearsLeft"),
        month: $this.find(".monthsLeft"),
        week: $this.find(".weeksLeft"),
        day: $this.find(".daysLeft"),
        hour: $this.find(".hoursLeft"),
        minute: $this.find(".minsLeft"),
        second: $this.find(".secsLeft"),
        yearTxt: $this.find(".yearsText"),
        monthTxt: $this.find(".monthsText"),
        weekTxt: $this.find(".weeksText"),
        dayTxt: $this.find(".daysText"),
        hourTxt: $this.find(".hoursText"),
        minTxt: $this.find(".minsText"),
        secTxt: $this.find(".secsText"),
    };

    var elNumber = $markup.wrapper.length;
    $this.addClass("item-" + elNumber);
    $($markup.year).html(yearsLeft);
    $($markup.yearTxt).html(yearsText);
    $($markup.month).html(monthsLeft);
    $($markup.monthTxt).html(monthsText);
    $($markup.week).html(weeksLeft);
    $($markup.weekTxt).html(weeksText);
    $($markup.day).html(daysLeft);
    $($markup.dayTxt).html(daysText);
    $($markup.hour).html(hrsLeft);
    $($markup.hourTxt).html(hourText);
    $($markup.minute).html(minsLeft);
    $($markup.minTxt).html(minsText);
    $($markup.second).html(secsLeft);
    $($markup.secTxt).html(secText);
}

$(".countdown").each(function () {
    var $this = $(this);
    var $endDate = $(this).data("countdown");
    var $format = $(this).data("format");
    setInterval(function () {
        makeTimer($endDate, $this, $format);
    }, 0);
});

// Tabs
let tabs = function (tab) {
    function init() {
        let tabContents = $(".tab-content", tab);
        let tabnav = $(".tab-nav", tab);
        tabContents.not(":first").hide();
        $("li", tabnav).on("click", function () {
            tabContents.hide();
            $($("a", this).attr("href")).show();

            return false;
        });
    }
    init();
};
tabs($("#tab1"));
tabs($("#tab2"));

// CustomTabs

const CustomTabs = function (tab) {
    function init() {
        let tabContent = $(".custom-tab-content", tab);
        let tabnav = $(".custom-tab-nav", tab);

        tabContent.not(":first").hide();
        tabnav.find("li:first").addClass("active").show();

        $("li", tabnav).on("click", function () {
            tabnav.find("li.active").removeClass("active");
            $(this).addClass("active");

            tabContent.hide();
            $($("a", this).attr("href")).show();

            return false;
        });
    }
    init();
};
CustomTabs("#maintab");

/*---------------------------------
      Scroll Up
  -----------------------------------*/
function scrollToTop() {
    var $scrollUp = $("#scrollUp"),
        $lastScrollTop = 0,
        $window = $(window);

    $window.on("scroll", function () {
        var st = $(this).scrollTop();
        if (st > $lastScrollTop) {
            $scrollUp.css({ bottom: "-60px" });
        } else {
            if ($window.scrollTop() > 200) {
                $scrollUp.css({ bottom: "60px" });
            } else {
                $scrollUp.css({ bottom: "-60px" });
            }
        }
        $lastScrollTop = st;
    });

    $scrollUp.on("click", function (evt) {
        $("html, body").animate({ scrollTop: 0 }, 600);
        evt.preventDefault();
    });
}
scrollToTop();

