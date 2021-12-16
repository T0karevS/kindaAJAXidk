$('.form').submit(function(e){
e.preventDefault();
let th=$(this);
let btn = th.find('.btn');
btn.addClass('progress-bar-striped progress-bar-animated')

$.ajax({
	url: '/send.php',
	method: 'post',
	dataType: 'html',
    data: th.serialize(),
	success: function(data){
		alert("success");
	}
})
});
