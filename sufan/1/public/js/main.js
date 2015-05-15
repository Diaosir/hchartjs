var mainNavLi = $(".main-nav>li");
var titleText = $("#title_text");
titleText.bind("click", function() {
	$("header").show();
	$(".bckg").show();
});
mainNavLi.bind("click", function(i) {
	if ($(this).children("ul").css("display") != "none") {} else {

	}
	$(this).children("ul").slideToggle(500);

});