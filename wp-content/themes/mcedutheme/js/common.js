var common = (function(){
	var fn_nav = function(){                
	    $("ul.nav li.dropdown").each(function(){	    	
		    $(this).find(".dropdown-toggle").click(function(){
		    	$(this).parents("li").siblings().removeClass("on");
		    	$(this).parents("li").siblings().find(".dropdown-menu").hide();
		    });
	    });
	};
	var fn_swiper = function(){
		var fn_swiper1 = new Swiper('.swiper1', {
			pagination: '.swiper-pagination1',
			paginationClickable: true,
			preventClicks: false,
			spaceBetween: 0,
			autoplayDisableOnInteraction:false,
			autoplay : 3000, //设置动画持续时间500ms
			speed:600,
			loop:true,
			lazyLoading: true,
			autoHeight: true, //enable auto height
			resistance:true,
		});
	};
	var fn_autoScroll = function(){
		$(".sec_max").slimScroll({
			width: '100%',
			height: '100%'
		});
				
		return;
		var _wrap=$(".news_con ul");
		var _interval=3000;
		var _moving;
		_wrap.hover(function(){
				clearInterval(_moving);
			},function(){
			_moving=setInterval(function(){
				var _field=_wrap.find('li:first');
				var _h=_field.height();
				_field.animate({marginTop:-_h+'px'},600,function(){
					_field.css('marginTop',0).appendTo(_wrap);
				})
			},_interval)
		}).trigger('mouseleave');
	};
	var fn_sideMenu = function(obj){
		obj.parents("li").find("dl").toggleClass("active");
		obj.parents("li").siblings().find("dl").removeClass("active");
	};
	var fn_mSelect = function(obj){
		var index=obj.parents("li").index();
		obj.parents("li").addClass("active").siblings().removeClass("active");
		$(".m_photoitem").eq(index).addClass("active").siblings().removeClass("active");
	};
	return{
		sideMenu : function(){
			fn_sideMenu($(this));
		},
		mSelect : function(){
			fn_mSelect($(this));
		},
		init: function() {
			//Swiper
			fn_swiper();
			
			//AutoScroll
			fn_autoScroll();
			
			//fn_nav
			fn_nav();
		}
	}
}());
$(function(){
	common.init();
	$("#side ul.side_menu li a.targ").click(common.sideMenu)
	$("#main .m_select ul li a").click(common.mSelect)
});