jQuery(function($){
var fx={
	'initModal':function(){//ф-ция затухания заднего фона
		if($('.model-window').length == 0){
			$('<div>').attr('id','jquery-overlays')
						.css({'background':'black','opacity':'0,7'})
					.fadeIn(2000)//плавн появление overlays
					 .appendTo('body');
			return $('<div>').addClass('model-window')
							.appendTo('body');
		}else{
			return $('.model-window');
		}
}}

$('.tovs a').bind('click',function(event){
	
	var data=$(this).attr('data');
	modal = fx.initModal();
	//добавл к мод окну закрыв ссылку
$('<a>').attr('href','#')
		.addClass('modal-class-btn')
		.html('&','time')
		.click(function(event){
				$('.model-window').remove();
		})
		.appendTo(modal);
		event.preventDefault();//ф-ция предотвращает действие по умолчанию
$('#jquery-overlays').fadeOut(2000,function(){
	$(this).remove();
});
	//вызов Ajax
    $.ajax({
	type:'GET',
	url:'ajax',
	data:'id' + 'data',
	success:function(data){
		modal:append(data);
	},
	error:function(err){
		modal:append(err);
	}
});
});
});
