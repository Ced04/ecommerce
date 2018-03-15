$(document).ready(function(){
	//Update Product
	$(document).on('click', '#edit', function(){
		alert("edit")
	});

	var timestamp = '<?=time();?>';
	function updateTime(){
	  $('#time').html();
	}
	$(function(){
	  
	});
	$(document).on('load', '#time', function(){
		setInterval(updateTime, 1000);
	});
});