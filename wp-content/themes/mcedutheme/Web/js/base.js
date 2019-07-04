/**
 * Created by vwdo on 2016/9/18.
 */
$(function(){
//移民项目切换
    $(".project ul li").hover(function(){
        var text=$(this).text()
        var a= $(this).children(".project-text").children("a").text()
        var p=$(this).children(".project-text").children("p").text()
        //alert(p)

        $(".project-bj-text a").text(a)
        $(".project-bj-text p").text(p)
        $(this).children(".project-text").children("a").addClass("active")
        $(this).children(".project-text").children("p").addClass("active")
        $(this).children(".project-text").children("b").addClass("active")

    },function(){
        $(this).children(".project-text").children("a").removeClass("active")
        $(this).children(".project-text").children("p").removeClass("active")
        $(this).children(".project-text").children("b").removeClass("active")

    })
    //海外置业切换
    $(".overseas ul li").hover(function(){
        var index=$(this).index()
        $(".overseas-li-d").eq(index).show().siblings(".overseas-li-d").hide()
    })
    //金融投资切换
    $(".finance-img").hover(function(){
        $(this).parent("li").children(".finance-li-j").addClass("active")
        $(this).parent("li").children(".finance-li-j").children("span").addClass("active")
        $(this).parent("li").children(".finance-li-j").children("b").addClass("active")
        $(this).parent("li").children(".finance-li-j").children("p").addClass("active")

    },function(){
        $(this).parent("li").children(".finance-li-j").removeClass("active")
        $(this).parent("li").children(".finance-li-j").children("span").removeClass("active")
        $(this).parent("li").children(".finance-li-j").children("b").removeClass("active")
        $(this).parent("li").children(".finance-li-j").children("p").removeClass("active")
    })
    $(".finance-img").hover(function(){
        var index=$(this).parent("li").index()
        $(".finance-w").eq(index).show().siblings(".finance-w").hide()
    })
    //移民资讯切换
    var nameber=0;
    var lis= $(".immigrant-z-yc ul").find("li")
    timer=setInterval(function(){
        nameber++
        if(nameber> $(".immigrant-z-yc ul li").length-1){
            nameber=0
        }
      lis.eq(nameber).trigger("click")

    },3000)

    lis.click(function(){
        var index=$(this).index()
        $(".immigrant-z").eq(index).show().siblings(".immigrant-z").hide()
        $(".immigrant-z-yc ul li img").removeClass("active")
        $(this).children("img").addClass("active")
    })
    $(".immigrant-z").hover(function(){
        clearInterval(timer);
    },function(){
        timer=setInterval(function(){
            nameber++
            if(nameber> $(".immigrant-z-yc ul li").length-1){
                nameber=0
            }
            lis.eq(nameber).trigger("click")

        },3000)
    })
    //$(".immigrant-z-yc ul li").click(function(){
    //    var index=$(this).index()
    //    $(".immigrant-z").eq(index).show().siblings(".immigrant-z").hide()
    //    $(".immigrant-z-yc ul li img").removeClass("active")
    //    $(this).children("img").addClass("active")
    //})

    //手机导航
    $(".phone-img").click(function(){
            $(".phone-nav").addClass("active")

    })
    $(".phone-nav-bj").click(function(){
        $(".phone-nav").removeClass("active")
    })
    var bescroll = $(document).scrollTop();
    $(window).scroll(function(){
        var afscroll = $(document).scrollTop();
        var res = afscroll - bescroll;
        if(res>0){
            bescroll = afscroll;
            $("#ftop").show()
        }else {
            bescroll = afscroll;
            $("#ftop").hide()
        }
    })
    $("#ftop").click(function(){
        $("body,html").animate({scrollTop:0},500);
    })
})