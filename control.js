$(function(){
	$('#q1 span').on('click', function(){
		$(this).toggleClass('active');
	});
	$('#q2 span').on('click', function(){
		$(this).toggleClass('active');
	});
	$('#submit').on('click', function(){
		var gender = $('#q1 span.active').hasClass('fa-male') ? 0 : 1;
		var rel = $('#q2 span.active').hasClass('fa-star') ? 0 : $('#q2 span').hasClass('fa-heart') ? 1 :2;
		var age = $('#q3 select').val();
		var budget = $('#q4 select').val();
        $.ajax({
            type: "POST",
            url: "calc.php",
            data: {
            	gender: gender,
            	rel: rel,
            	age: age,
            	budget: budget
            }
        }).done(function(ret){
        	console.log(ret);
        }).fail(function(ret){
        	console.log(ret);
        });
	});
});