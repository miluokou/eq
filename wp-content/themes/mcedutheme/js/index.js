$(document).on("click", '#cancel', function() {
	$('#login_name').val("");
	$('#login_pass').val("");
	if(window.localStorage.login_name) {
		window.localStorage.removeItem('login_name');
	}
	if(window.localStorage.login_pass) {
		window.localStorage.removeItem('login_pass');
	}
	if(window.localStorage.rem) {
		window.localStorage.removeItem('rem');
	}
})
$(document).ready(function() {
	var long1 = $(".b_class").length;
	console.log(long1);
	for(var i = 0; i < long1; i++) {
		var alt = $('.b_class:eq(' + i + ')').find('label').html();
		$('.b_class:eq(' + i + ')').find('img').attr('title', alt);
	}
	$(document).on("click", ".banner img", function(obj) {
		var href = $(this).next();
		var banner_link = href.attr('href');
		console.log(banner_link);
		banner_link = banner_link.replace(window.location.href, '');
		console.log(banner_link);
		
		$('#new_window').attr('href',banner_link);
		banner_link=$('#new_window').attr('href');
		if(banner_link!="javascript:void(0)"){
			$('#new_window')[0].click();
		}
	})
	var abc = $('.banner img');
	console.log(abc.length);
	for(var k=0;k<abc.length;k++){
		var s =$('.banner img').eq(k).next().attr('href');
//		s=trim(s);
		if(s!='#' && s!='javascript:void(0)'){
			$('.banner img').eq(k).css('cursor','pointer');
//			console.log(s);
		}else{
			$('.banner img').eq(k).next().attr('href','javascript:void(0)');
			$('.banner a').eq(k).removeAttr('target');
		}
	}
	if(window.localStorage.rem) {
		if(window.localStorage.login_name) {
			$('#login_name').val(window.localStorage.login_name);
			$('#login_pass').val(window.localStorage.login_pass);
		} else {
			$('#login_name').val("");
			$('#login_pass').val("");
		}
	} else {
		$('#login_name').val("");
		$('#login_pass').val("");
	}
	var login_name = $('#login_name').html();
	if(login_name == "") {
		$('.nav_ico li a').attr('href', "javascript:void(0)");
		$('.nav_ico li a').unbind();;
//		$('.nav_ico li a').removeAttr("data-content");
//		$('.nav_ico li a').removeAttr("data-target");
		$('.nav_ico li a').click(function() {
			var all_url = window.location.href;
			if(all_url.lastIndexOf("_en/") > -1 || all_url.lastIndexOf("/en") > -1) {
				var houzhui = '_en';
			}
			if(all_url.lastIndexOf("_zh/") > -1 || all_url.lastIndexOf("/zh") > -1) {
				var houzhui = '_zh';
			}
			if(houzhui == '_zh') {
				alert('請先登錄');
			} else {
				alert('Please login first. ');
			}

		})

		$('.login_first').click(function() {
			var all_url = window.location.href;
			if(all_url.lastIndexOf("_en/") > -1 || all_url.lastIndexOf("/en") > -1) {
				var houzhui = '_en';
			}
			if(all_url.lastIndexOf("_zh/") > -1 || all_url.lastIndexOf("/zh") > -1) {
				var houzhui = '_zh';
			}
			if(houzhui == '_zh') {
				alert('請先登錄');
			} else {
				alert('Please login first. ');
			}
		})
	}
	
})
$(document).on("click", "#login", function() {
		var login_name = $("#login_name").val();
		var login_pass = $("#login_pass").val();
		if($('input[name="rem"]').is(':checked')) {
			var rem = $("input[name='rem']").val();
			window.localStorage.rem = rem;
			window.localStorage.login_name = login_name;
			window.localStorage.login_pass = login_pass;
		} else {
			var rem = '';
		}
		var login_name;
		var login_pass;
		var api_byget = $("#api_byget").html();
		var api_askrolebyget = $("#api_askrolebyget").html();
		var img_host = $("#img_host").html();
		var urll = img_host + "byget/";
		param = {};
		param['api_byget'] = api_byget;
		param['api_askrolebyget'] = api_askrolebyget;
		param['login_name'] = login_name;
		param['login_pass'] = login_pass;
		param['rem'] = rem;
		$.ajax({
			type: "POST",
			url: urll,
			data: param,
			dataType: 'JSON',
			cache: false,
			async: false,
			success: function(data) {
				console.log(data);
				if(data.entitlement) {
					window.localStorage.count = data.count;
					console.log(window.localStorage.count);
					location.reload();
				} else {
					$("#myModal2").modal("show");
				}
			},
			error: function(jqXhr) {
				console.log(jqXhr.status);
			}
		});
	})

	.on('click', ".logout", function() {
		var api_byget = $("#api_byget").html();
		var api_askrolebyget = $("#api_askrolebyget").html();
		var img_host = $("#img_host").html();
		var urll = img_host + "byget/logout.php";
		param = {};
		param['api_byget'] = api_byget;
		param['api_askrolebyget'] = api_askrolebyget;
		$.ajax({
			type: "POST",
			url: urll,
			dataType: 'JSON',
			data: param,
			cache: false,
			async: false,
			success: function(data) {
				console.log(data);
				location.reload();
				if(window.localStorage.count) {}
			},
			error: function(jqXhr) {
				console.log(jqXhr.status);
			}
		});

	})
	.on('click', "#cancel", function() {
		$("#login_name").attr("value", "");
		$("#login_pass").attr("value", "");
		var api_byget = $("#api_byget").html();
		var api_askrolebyget = $("#api_askrolebyget").html();
		var img_host = $("#img_host").html();
		var urll = img_host + "byget/clear.php";
		param = {};
		param['api_byget'] = api_byget;
		param['api_askrolebyget'] = api_askrolebyget;
		$.ajax({
			type: "POST",
			url: urll,
			dataType: 'JSON',
			data: param,
			cache: false,
			async: false,
			success: function(data) {
				console.log(data);

			},
			error: function(jqXhr) {
				console.log(jqXhr.status);
			}
		});
	})
	.on('click', '#search_image', function() {
		var keywords = $('.input_search').val();
		window.localStorage.keywords = keywords;
		console.log(window.localStorage.keywords);
		window.location = $('.cate_link').attr("href");
	})
	