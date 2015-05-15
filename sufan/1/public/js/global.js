window.onload = function() {
	var globalUrl='http://sufan.sinaapp.com';
	//所有的点击事件，使用事件委托
	$('body').bind('click',function(e){
		var event = e ||window.event;
		var target = event.target||event.srcElement;
		//添加病人
		if($(target).attr('id')=='add_patient'){
			$('#patient_scroll_main').append('<li data-patient_id="56">黄振</li>');
		}
		//笼罩层
		if($(target).attr('id')=='update_patient'){
			var test = document.createElement('div');
			$(test).addClass('model');
			$('body').append(test);
			$.ajax({
				type:'post',
				url:globalUrl+'/doctor/getModifyInfoHtml',
				data:{patient_id:$('.patient-info').data('patient_id'),info_style:$('#chance_info .after-click').data('info-style')},
				beforeSend:function(XMLHttpRequest){
					$('.model').append('<h2 class="save-load"><img src='+globalUrl+'/public/img/loading.png></h2>');
				},
				success:function(data){										
						setTimeout(function(){
								$('.model').append(data);
							    scroll('model_body');
						},1000);
				},
				complete:function(){
					setTimeout(function(){
						$('.model>h2').remove();
						clearInterval(interval);
					},1000);
				}
			});
		}
		//关闭笼罩层
		$(target).hasClass('entypo-cancel-circled') && $(target).parent().parent().remove();
		//保存数
		if($(target).attr('id')=='save'){
			$.post(globalUrl+'/doctor/saveInfoData',{info_array:$('#update_data_form').serializeArray(),info_style:$('#chance_info .after-click').data('info-style')},function(data){
			});
			$(target).parent().parent().remove();
			$('.model').append('<h2 class="save-load">正在保存</h2>');
			var str = '正在保存',i=0;
			var interval =setInterval(function(){
				str+='.';
				$('.save-load').text(str);
				i++;
				(i==5) && (str='正在保存',i=0);
			},200);
			setTimeout(function(){
				$('.model').remove();
				clearInterval(interval);
			},5000);
		}
		//修改资料
		$(target).attr('id') == 'show_info_style' && $(target).next().slideToggle(300);
		//选项卡
		if($(target).parent().hasClass('ptitle')){
			var infoStyle = $(target).data('info-style');
			$('#chance_info').attr('data-info-style',infoStyle);
			$('#chance_info .ptitle>span').each(function(){
				$(this).hasClass('before-click') || $(this).addClass('before-click');
				$(this).hasClass('after-click') && $(this).removeClass('after-click');
				$(this).css('line-height','42px');
			});
			$(target).removeClass('before-click');
			$(target).addClass('after-click');
			$(target).css('line-height','50px');

			$('.info-table-area').each(function() {
				if ($(this).data('info-style') == infoStyle) {
					$(this).hasClass('invisible') && $(this).removeClass('invisible');
					$(this).addClass('visible');
				} else {
					$(this).hasClass('visible') && $(this).removeClass('visible');
					$(this).addClass('invisible');
				}
			});
		}
		//选病人
		if($(target).parent().attr('id')=='patient_scroll_main'){
			$.ajax({
				type:'post',
				url:globalUrl+'/doctor/getPatientInfoHtml',
				data:{patient_id:$(target).data('patient_id')},
				beforeSend:function(XMLHttpRequest){
					$('.info-m-m-right').empty();
					$('.info-m-m-right').append('<h2 class="save-load"><img src='+globalUrl+'/public/img/loading.png></h2>');
				},
				success:function(data){										
						setTimeout(function(){
								$('.info-m-m-right').replaceWith(data);
								scroll('info_style_one');
								scroll('info_style_two');
								scroll('info_style_three');
						},1000);
				},
				complete:function(){
					setTimeout(function(){
						$('.save-load').remove();
						clearInterval(interval);
					},1000);
				}
			});
		}
		//选择信息类型
		if($(target).parent().parent().attr('id')=='info_select'){
			$(target).parent().parent().attr('data-info-style', $(target).data('value'));
			$(target).parent().parent().children('p').text($(target).data('value'));
			$(target).parent().slideToggle(300);
			var interval;
			$.ajax({
				type:'post',
				url:globalUrl+'/doctor/getTableInfoStyleHtml',
				data:{patient_id:$('.patient-info').data('patient_id'),table_info_style:$(target).data('value')},
				beforeSend:function(XMLHttpRequest){
					$('.visible').removeClass('visible').addClass('invisible');
					$('#chance_info').addClass('invisible');
					$('.info-m-m-right').append('<h2 class="save-load"><img src='+globalUrl+'/public/img/loading.png></h2>');
				},
				success:function(data){										
						setTimeout(function(){
								$('#chance_info').removeClass('invisible').replaceWith(data);
								scroll('info_style_one');
								scroll('info_style_two');
								scroll('info_style_three');
							},1000);
				},
				complete:function(){
					setTimeout(function(){
						$('.save-load').remove();
						clearInterval(interval);
					},1000);
				}
			});
		}
	});
    //搜索病人
    $('body').bind('keyup',function(e){
    	var event =e || window.event;
    	var target =event.target ||event.srcElement;
    	if($(target).attr('id')=='search_patient_name'){
    		var liList= $('#patient_scroll_main li');
    		var reg = new　RegExp($(target).val(),'g');
    		liList.each(function(){
    		    if(reg.test($(this).text())){
    		    	$(this).show('fast');
    		    }else{
    		    		$(this).hide('fast');
    		    	}
    		 });	  
    	}

    });
	$('#update_patient,#add_patient').hover(
		function() {
			$(this).parent().children('span.tooltip').css('visibility', 'visible');
		},
		function() {
			$(this).parent().children('span.tooltip').css('visibility', 'hidden');
		});

	/*滚动条组件
	  传入的是需要滑动的块名，
	  块名+'_scroll'为主容器
	  块名+'_scroll_bar'为滑块
	  块名+'_scroll_main'为主体
	*/

	function scroll(element) {
		//注册鼠标滚动事件
		function addMouseWheel(obj, fn) {
			obj.onmousewheel = fnWheel;
			obj.addEventListener && obj.addEventListener('DOMMouseScroll', fnWheel, false);

			function fnWheel(e) {
				var oEvent = e || event;
				var d = oEvent.wheelDelta ? oEvent.wheelDelta > 0 : oEvent.detail < 0;

				fn(d);

				if (oEvent.preventDefault) oEvent.preventDefault();

				return false;
			}
		}
		var scroll = document.getElementById(element + '_scroll');
		var oSar = document.getElementById(element + '_scroll_bar');
		var scrollMain = document.getElementById(element + '_scroll_main');
		var mainSted = 20;
		var barHeight = (scroll.offsetHeight * mainSted) / (scrollMain.offsetHeight - scroll.offsetHeight);
		if (barHeight < 30) {
			barHeight = 30;
		} else if (barHeight > 100) {
			barHeight = 100;
		}
		oSar.style.height = barHeight + 'px';
		var barSted = ((scroll.offsetHeight - oSar.offsetHeight) * mainSted) / (scrollMain.offsetHeight - scroll.offsetHeight);

		if (scrollMain.offsetHeight - scroll.offsetHeight > 10) {
			oSar.style.display = 'block';

			addMouseWheel(scroll, function(d) {
				var mouseMainY = 0;
				var mouseBarY = 0;
				if (d) {
					mouseBarY = oSar.offsetTop - barSted;
					mouseMainY = scrollMain.offsetTop + mainSted;
				} else {
					mouseBarY = oSar.offsetTop + barSted;
					mouseMainY = scrollMain.offsetTop - mainSted;
				}
				if (mouseBarY <= 0) {
					mouseBarY = 0;
					mouseMainY = 0
				} else if (mouseBarY >= scroll.offsetHeight - oSar.offsetHeight) {
					mouseBarY = scroll.offsetHeight - oSar.offsetHeight;
					mouseMainY = scroll.offsetHeight - scrollMain.offsetHeight;
				}
				oSar.style.top = mouseBarY + 'px';
				scrollMain.style.top = mouseMainY + 'px';
			});
			
		}
	}
	$('body').bind('mousedown',function(e){
		var event = e ||window.event;
		var target= event.target||event.srcElement;
		if($(target).attr('id')=='patient_scroll_bar'){
			
		}

	});
	scroll('patient');
}