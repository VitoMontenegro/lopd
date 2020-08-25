
/*
jQuery(function($){
	$('input[name=print]').on('click', function(){
		var my_value = $(this).attr("data-array")
		console.log(my_value)
		$.ajax({
			type:'POST',
			url:ajaxurl,
			data:'action=myaction&price_val=' + my_value,
			success:function(json){
				
				  if(json.error) return;
					//fire off other ajax calls
	  				jQuery('.linkbtn').html('<a id="link" href="/wp-content/uploads/pdf/'+json+'" target="__blank">Descargar '+json+'</a>' );
			}
		});
	});
	$('input[name=printfan]').on('click', function(){
		var my_value = $(this).attr("data-array")
		console.log(my_value)
		$.ajax({
			type:'POST',
			url:ajaxurl,
			data:'action=myactionfun&price_val=' + my_value,
			success:function(json){
				
				  if(json.error) return;
					//fire off other ajax calls
	  				jQuery('.linkbtnfan').html('<a id="link" href="/wp-content/uploads/pdf/fun_'+json+'" target="__blank">Descargar fan '+json+'</a>' );
			}
		});
	});
	$('input[name=labelprint]').on('click', function(){
		var my_value = $(this).attr("data-array")
		$.ajax({
			type:'POST',
			url:ajaxurl,
			data:'action=myactionlabel&price_val=' + my_value,
			success:function(json){
				  if(json.error) return;
					//fire off other ajax calls
	  				jQuery('.linkbtn').html('<a href="/wp-content/uploads/pdf/'+json+'" target="__blank">Descargar '+json+'</a>' );
			}
		});
	});
	$('input[name=labelprintfun]').on('click', function(){
		var my_value = $(this).attr("data-array")
		$.ajax({
			type:'POST',
			url:ajaxurl,
			data:'action=myactionlabelfun&price_val=' + my_value,
			success:function(json){
				  if(json.error) return;
					//fire off other ajax calls
	  				jQuery('.linkbtnfun').html('<a href="/wp-content/uploads/pdf/fan_'+json+'" target="__blank">Descargar fan '+json+'</a>' );
			}
		});
	});


});
*/