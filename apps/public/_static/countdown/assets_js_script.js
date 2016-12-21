$(function(){
	
	var note = $('#note'),
	ts = (new Date(2017, 0, 20, 23, 59, 59)).getTime(),
	newYear = true;
	$('#countdown').countdown({
		timestamp	: ts,
		format: "dd:hh:mm:ss",
		callback	: function(days, hours, minutes, seconds){
			
			var message = "猴年狂欢倒计时，ThinkSNS新年特惠！<a href='http://demo.thinksns.com/ts4/index.php?app=weiba&mod=Index&act=postDetail&post_id=4740'>点击</a>快速报名";
			note.html(message);
		}
	});

	$('.cd_close').click(function(){
		$('.countdown').hide();
	})
	
});
