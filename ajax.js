$('.form').submit(function(e){
e.preventDefault();
let th=$(this);
let btn = th.find('.btn');

$.ajax({
	url: '/send.php',
	method: 'post',
	dataType: 'html',
    data: th.serialize(),
	success: function(data){
		document.querySelector(".info").innerHTML = data;
	}
	
})
});
