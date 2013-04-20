var current=""; 
function initMenu() {
  $('#menu ul').hide(); 
  if ($('#menu li').has('ul')) $('#menu ul').prev().addClass('expandable'); 
  $('.expandable').click(
	function() {
		if(current!=$(this).html()){
			$('.current').next().slideToggle();
			$('.current').removeClass('expanded');
			$('.current').removeClass('current');
		}
		$(this).next().slideToggle();
		$(this).toggleClass('expanded');
		$(this).toggleClass('current');
		current=$(this).html();
	  }
	);
}	