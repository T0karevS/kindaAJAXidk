$('.form').submit(function(e){
e.preventDefault();
let th=$(this);
function a()
	{
		let form = document.getElementsByName("form2");
		console.log(form);
		form.refresh();
		alert("hel")
	}
// let btn = th.find('.btn');
// btn.addClass('progress-bar-striped progress-bar-animated')
$.ajax({
	url: 'send.php',
	method: 'post',
	dataType: 'html',
    data: th.serialize(),
	success: function(data){
		setTimeout(a,1000);
		alert("success");



	},
	timeout: 3000

})

});

