AOS.init({startEvent: 'load'});
window.addEventListener('load', AOS.refresh);

$(".header_nav_first>li.drop>a").click(function(){
    if($(window).width() < 992) {
        console.log("click!");
        $(this).toggleClass("active");
        $(this).parents("li").find(".header_nav_second").slideToggle(300);
    }
})

$(".header_nav_third>li>a").click(function(){
    let target = $(this).attr("data-target");
    $(this).addClass("active");
    $(this).parents("li").siblings("li").find("a").removeClass("active");
    $(target).addClass("active").siblings(".header_nav_forth").removeClass("active");
})

$(".header_lang_active").click(function(){
    $(".header_lang_list").slideToggle(300);
})

$(".header_search_active").click(function(){
    $(".header_search_form").fadeToggle(300);
    $(this).toggleClass("active");
})

$(document).click(function (event) {
    var langArea = $(".header_lang");
    if (!langArea.is(event.target) && langArea.has(event.target).length === 0) {
        $(".header_lang_list").slideUp(300);
    };

    var searchArea = $(".header_search");
    if (!searchArea.is(event.target) && searchArea.has(event.target).length === 0) {
        $(".header_search_form").fadeOut(300);
        $(".header_search_active").removeClass("active");
    };
});

function headerRWD() {
    if($(window).width() < 992) {
        $(".header_nav_third").each(function(){
            $(this).children("li").each(function(){
                let link = $(this).find("a").attr("data-link");
                console.log(link);
                $(this).find("a").attr("href",link);
            })
        })
        $(".header_nav_first>li.drop").each(function(){
            $(this).children("a").attr("href","javascript:void(0)");
        })
    }else {
        $(".header_nav_first>li.drop").each(function(){
            let link = $(this).find("a").attr("data-link");
            $(this).children("a").attr("href",link);
        })
        $(".header_nav_third").each(function(){
            $(this).find("a").attr("href","javascript:void(0)");
        })
        $(".header_nav_second").show();
    }
}
headerRWD();

$(window).on("resize scroll",function(){
    headerRWD();
})

$(".header_menu").click(function(){
    $(this).toggleClass("active");
    $(".header_nav").toggleClass("active");
})

$(".btn-top").click(function(){
    $("html, body").animate({scrollTop: 0},300);
})

$(".tab-common-active").click(function(){
    $(this).parents(".tabBox").find(".tab-common").slideToggle(300);
})
