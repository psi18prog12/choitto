function slide1(){
  var tab1 = document.getElementById( "tab-1" ) ;
  var tab2 = document.getElementById( "tab-2" ) ;
  tab1.checked = false ;
  tab2.checked = true ;
}

function slide2(){
  var tab2 = document.getElementById( "tab-2" ) ;
  var tab3 = document.getElementById( "tab-3" ) ;
  tab2.checked = false ;
  tab3.checked = true ;
}

function slide3(){
  var tab3 = document.getElementById( "tab-3" ) ;
  var tab4 = document.getElementById( "tab-4" ) ;
  tab3.checked = false ;
  tab4.checked = true ;
}

function slide4(){
  var tab4 = document.getElementById( "tab-4" ) ;
  var tab5 = document.getElementById( "tab-5" ) ;
  tab4.checked = false ;
  tab5.checked = true ;
}

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
    var age_min = $('#age_min').val();
    var age_max = $('#age_max').val();
    var budget_min = $('#budget_min').val();
    var budget_max = $('#budget_max').val();
    var age = {
      min: age_min,
      max: age_max
    };
    var budget = {
      min: budget_min,
      max: budget_max
    };
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
          var name = ret.data.name;
          var url = ret.data.url;
          var img = ret.data.img;
          $('#result').append('<h1 class="pt-5 pl-5">オススメのプレゼントは…</h1>\
                <div class="card border border-primary" style="width: 20rem; margin:auto;">\
                    <img class="card-img-top" src="'+img+'" alt="Card image cap">\
                    <div class="card-body">\
                      <h4 class="card-title">'+name+'</h4>\
                      <a href="'+url+'" class="btn btn-outline-warning">早速買う！</a>\
                    </div>\
                </div>\
                <div class="text-white text-center">\
                <a href="/" class="mt-2 btn btn-info icobutton-3-ccc-green">やり直す</a>\
              </div>').show('slow');
        }).fail(function(ret){
          console.log(ret);
        });
  });
});