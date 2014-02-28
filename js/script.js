$().ready(function(){

	initPrjClick();
})

function initPrjClick() {
	$('.project-js').on('click',function() {
		alert("test");
	})
}