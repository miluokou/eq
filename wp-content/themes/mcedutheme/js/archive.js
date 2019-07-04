	function Trim(str)
     { 
         return str.replace(/(^\s*)|(\s*$)/g, ""); 
      }
    function getFirst(elem){
	    for(var i=0,e;e=elem.childNodes[i++];){
	        if(e.nodeType==1)
	            return e;
	    }      
	}
	$(document).ready(function(){
		var table1_fa = $('#form_content_table').children().length;
		var table1 = $('#form_content_table tr:eq(0)').children().length;
		var table2 = $('#form_content_table tr');
		var max = 0;
		for(var i=0;i<=table1_fa;i++){
			var nub = $('#form_content_table tr:eq('+i+')').children().length;
			if(nub>max){
				max=nub;
			}
		}
		for(var i=0;i<=table1_fa;i++){
			var nub = $('#form_content_table tr:eq('+i+')').children().length;
			if(max>nub){
				var cha=max-nub;
				for(var j=0;j<cha;j++){
					var abc = $('<td></td>');
					$('#form_content_table tr:eq('+i+')').append(abc);	
				}
			}
		}
		console.log(max);
		console.log(table1);
		console.log(table2.html());
		$('.page-header').remove();
		$book = $('.book_display').html();
		$("#book_cate").html($book);
		for(var i=0;i<=10;i++){
			var tiaojian = '.posts_special_'+i;
			var post_con=$(tiaojian).attr('id');
			if(post_con){
				var post_condition= '#'+post_con;
				window.location[post_con] = $(post_condition).html();
			}

		}
		
		var yuming_befor=window.location.protocol+'//'+window.location.host;
		if(window.localStorage.keywords){
		console.log(window.localStorage.keywords);
			var img_src2 = $('#relativ_path2').html();
			var urll= img_src2+"byget/search.php";
			var keywords = window.localStorage.keywords;
			$.ajax({
				type:"POST",
				url:urll,
				data:{
					urll:yuming_befor+'/en/',
					keywords:keywords,
				},
				dataType: 'JSON',
				cache: false,
				async: false,
				success:function(data){
					$(document).ready(function(){
						$("#form_content_table").html(data.info);
					})
				},
				error:function(jqXhr){
					console.log(jqXhr.status);
				}
			});
			window.localStorage.removeItem('keywords');
		}


	for(var i=1;i<=10;i++)
	{
		var condition = '#side li.n'+i.toString();
		var condition2 = '#side li.n'+i.toString()+' dl';
		var condition3 = '#side li.n'+i.toString()+' dl .lv2_title';
		var title= $('#two_level_title').html();
		title=Trim(title);
		var title_exist= $(condition).html();
		var title_exist3= $(condition3).html();
		var level2_content = $(condition2).html();
		var level3_content = $(condition3).html();
		level3_content =Trim(condition3);
//		var level2_content = $(condition2).html();
		var new_content =Trim(level2_content);
		if(new_content==""){
		console.log(i);
		}
		if(title_exist.lastIndexOf(title)>-1 && new_content!="" ){
				$(condition2).attr('class','active');
		}
			
	}
	var two_level_small_title= $("#two_level_small_title").html();
	var catebook = $("#book_cate").html();
	var book_cate_lis = $("#book_cate li").length;
		for(var i=0;i<book_cate_lis;i++){
			var condition2 = "#book_cate li:eq("+i.toString()+") a";
			var condition2_li = "#book_cate li:eq("+i.toString()+")";
			var web_samll_title = $(condition2).html();
			if(web_samll_title && two_level_small_title){
				if(Trim(web_samll_title) ==Trim(two_level_small_title)){
					var origin_class = $(condition2_li).attr('class');
					var new_class = origin_class + " book_active";
					$(condition2_li).attr('class',new_class);
				}
			}
		}
	$('.page2_login_first').click(function(){
				var all_url=window.location.href;
				 if(all_url.lastIndexOf("_en/")>-1 || all_url.lastIndexOf("/en")>-1){
					var houzhui = '_en';
				}
				if(all_url.lastIndexOf("_zh/")>-1 || all_url.lastIndexOf("/zh")>-1){
					var houzhui = '_zh';
				}
				if(houzhui=='_zh'){
					alert('請先登錄');
				}else{
					alert('Please login first. ');
				}
			})
	$('.wulianjie').click(function(){

//			var word = $(this).find('label').html();
			var word= $(this).text();
//			alert(word_last);
			word=Trim(word);
			var nb = $(this).attr('word-data');
			var all_url=window.location.host+window.location.pathname;
			if(all_url.lastIndexOf("_en/")>-1 || all_url.lastIndexOf("/en")>-1){
				nb=word.slice(0,1).toUpperCase();
			}
			var sreach ="?key="+nb+"&word="+word;
			window.location.href=sreach;
		})
	})
	$(document).on('click','.btn_search',function(){
		var yuming_befor=window.location.protocol+'//'+window.location.host;
		var img_src2 = $('#relativ_path2').html();
		var urll= img_src2+"byget/search.php";
		var keywords = $('#search_text').val();
		$.ajax({
			type:"POST",
			url:urll,
			data:{
				urll:yuming_befor+'/en/',
				keywords:keywords,
			},
			dataType: 'JSON',
			cache: false,
			async: false,
			success:function(data){
				console.log(data.info);
				$(document).ready(function(){
					$("#form_content_table").html(data.info);
					$("#form_content_table th")
				})
			},
			error:function(jqXhr){
				console.log(jqXhr.status);
			}
		});
	})
	.on('click',"#main .m_select3 ul li",function(){
		
		var select_teacher_index = $('#main .m_select3 ul li.active').index();
		var select_content_condition="#main .m_photoitem:eq("+select_teacher_index+") interview_img";
		var interview_img =  $('#main .m_photoitem.active .interview_img').html();
		var interview_img2 =  $('#main .m_photoitem.active .interview_img2').html();
			if(Trim(interview_img)!=Trim(interview_img2)){
				console.log(Trim(interview_img));
				$('#main .m_photoitem.active').css('background-image','url('+Trim(interview_img)+')')
			}else{
				$('#main .m_photoitem').css('background-image','url('+interview_img2+'/images/m_photoitem_bg.jpg)');
			}
	})
	.on('click',".logout",function(){

		var img_src2 = $('#relativ_path2').html();
		var urll= img_src2+"byget/logout.php";
		var redi= $('.logo').find('a').attr('href');
//				window.location.href=redi;
		
//		alert(redi);
		
		$.ajax({
			type:"POST",
			url:urll,
			dataType: 'JSON',
			cache: false,
			async: false,
			success:function(data){
				console.log(data);
//				location.reload();
				window.location.href=redi;
				if(window.localStorage.count){
					window.localStorage.getItem('count');
				}
			},
			error:function(jqXhr){
				console.log(jqXhr.status);
			}
		});
		
	})
	$(document).ready(function(){
		
		$('#voice').click(function(){
			var audio = document.getElementById("myAudio");
			audio.play();
		})
		function get_houzhui2(){
			var all_url=window.location.href;
			 if(all_url.lastIndexOf("_en/")>-1 || all_url.lastIndexOf("/en")>-1){
				var houzhui = '_en';
			}
			if(all_url.lastIndexOf("_zh/")>-1 || all_url.lastIndexOf("/zh")>-1){
				var houzhui = '_zh';
			}
			return houzhui;
		}
		var book_cate = $('#book_cate').html();
		if(book_cate.lastIndexOf("No categories")>-1 || book_cate.lastIndexOf("no categories")>-1 || book_cate.lastIndexOf("沒有分類")>-1){
			$('#book_cate').remove();
		}
//		var cate_parent=$('#cate_parent').html();
		if(window.localStorage.s3_url){
			console.log(window.localStorage.s3_url);
			window.localStorage.removeItem('s3_url');
			$('.n3').click();
		}

		$('.menu').click(function(){
			for(var i=1;i<=10;i++){
				var $condition1 = "#web_tab .n"+i+" dl";
				var zhuangtai = $($condition1).attr('class');
				if(zhuangtai=="active"){
					var condition2 = "#mex_"+i+" ul";
					var condition3 = "#mex_"+i;
					var condition4 = "#mex_"+i+" ul li";
				}
			}
			$(condition2).css('display','block');
			$(condition3).addClass('on');
			var long2 = $(condition4).length;
			var title = Trim($("#two_level_title").html());
			for(var j=0;j<long2;j++){
				var condiss = condition4+':eq('+j+')';
				var m_title = Trim($(condiss+' a').html());
				if(title==m_title){
					$(condiss+' a').css('background','#337ab7');
					$(condiss+' a').css('color','white');
				}
			}
//			console.log(title);
		})
		$("#dictionarys ul li").click(function(){
			var all_url=window.location.href;
			 if(all_url.lastIndexOf("_en/")>-1 || all_url.lastIndexOf("/en")>-1){
				var houzhui = '_en';
				var zimu =$(this).find('a').html();
			}
			if(all_url.lastIndexOf("_zh/")>-1 || all_url.lastIndexOf("/zh")>-1){
				var houzhui = '_zh';
				var zimu =$(this).find('a').attr("nb-data");
			}
			var new_url2 = "?key="+zimu;
			window.location.href=new_url2;
		})

		$('#table2 tr td').click(function(){
			var houzhui = get_houzhui2();
			houzhui = Trim(houzhui);
			if(houzhui == '_zh'){
				var zimu =$("#dictionarys ul li.active a").attr("nb-data");
				var word =$(this).find('a').attr('url-data');
			}else{
				var zimu = $("#zimu").html();
				var word =$(this).find('a').html();
			}
//			alert(word);
			var new_url2 = "?key="+zimu;
			var new_url3 =new_url2+ "&word="+word;
			window.location.href=new_url3;
		})
		$('#prev').click(function(){
			var word =$(this).attr('data');
			if(word!=0){
				
			var houzhui = get_houzhui2();
			houzhui = Trim(houzhui);
			if(houzhui == '_zh'){
				var zimu = $("#dictionarys ul li.active a").attr("nb-data");
			}else{
				var zimu = $("#dictionarys ul li.active a").html();
			}

			var new_url2 = "?key="+zimu;
			var new_url4 =new_url2+ "&word="+word;
			window.location.href=new_url4;
			
			}
		})
		$("#back").click(function(){
			var houzhui = get_houzhui2();
			houzhui = Trim(houzhui);
			if(houzhui == '_zh'){
				var zimu = $("#dictionarys ul li.active a").attr("nb-data");
			}else{
				var zimu = $("#dictionarys ul li.active a").html();
			}

			var new_url2 = "?key="+zimu;
			window.location.href=new_url2;
		})
		$('#next').click(function(){
			var word =$(this).attr('data');
			if(word!=0){
				var houzhui = get_houzhui2();
				houzhui = Trim(houzhui);
				if(houzhui == '_zh'){
					var zimu = $("#dictionarys ul li.active a").attr("nb-data");
				}else{
					var zimu = $("#dictionarys ul li.active a").html();
				}
				var new_url2 = "?key="+zimu;
				var new_url4 =new_url2+ "&word="+word;
				window.location.href=new_url4;
			}
		})
		$('#yuyin').click(function(){
//			alert('123');
			$("#fachu").bind('audio',play()); 
		})
		
	function getQueryString(name) { 
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i"); 
        var r = window.location.search.substr(1).match(reg); 
        if (r != null) return unescape(r[2]); 
        return null; 
   	} 
   	var key_v= getQueryString('key');
   	
   	var objs = $("#dictionarys ul li");
   	var houzhui = get_houzhui2();
	houzhui = Trim(houzhui);

   	for(var i=0;i<26;i++){
   		
   		var condition = "#dictionarys ul li:eq("+i+") a";
   		var condition2= "#dictionarys ul li:eq("+i+")";
	if(houzhui == '_zh'){
   		var zimu2 = $(condition).attr('nb-data');
   	}else{
   		var zimu2 = $(condition).html();
   	}

   		if(zimu2){
	   		zimu2 = Trim(zimu2);
	   		if(zimu2==key_v){
	   			$(condition2).addClass('active');
	   		}
	   	}
   	}
   	console.log(objs);
	})
