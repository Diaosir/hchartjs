(function($,window){
	window.HZ={};
	window.HZ.initList=function(){
		$('.list-a').bind('click',function(e){
			var that=this;
			e.preventDefault();
			$('#sidebar li.active').removeClass('active');
			$(this).parent().addClass('active');
			$('#page_content').css({
				'opacity':.5,
				'filter':'alpha(opacity=50)'
			});
			$('body').append("<div class='loading-center'><div class='spinner1'></div><h5>Loading<span class='dot'>.</span></h5></div>");
			setTimeout(function(){
				getAjaxHtml($(that).data('url'));
			},500)

		})
	}
	function getAjaxHtml(url){
		$.ajax({
			url: url,
			type: 'html',
			success:function(html){
				$('#page_content').html(html)
				                  .css({
				                    'opacity':1,
				                    'filter':'alpha(opacity=100)'
			                       });
				$('.loading-center').remove();
			}
		})
	}
	HZ.initList();
})(jQuery,window)