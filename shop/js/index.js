$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });
/*login & registration page */

/*home*/

  $('.spn_h').click(function(){
    // alert("The paragraph was clicked.");
    // window.open('http://localhost/shop/index.php?category=422');
    window.location = 'http://localhost/shop/index.php';
  });


  /* sign up*/  
  $('.spn_r').click(function(){ 
    $('.login_form').hide();
    $('.signup_form').show();
    $('.login_content').hide();
   
  });



  /* end */

  /*sign in*/

  $('.spn_l').click(function(){
    if($(this).attr("class") == "spn_l"){

    $('.signup_form').hide();
    $('.login_form').show();
    $('.login_content').hide();
    }

  });


  
  /*input field filling handle*/
  $("input").prop('required',false);
  $("input[type=checkbox]").prop('required',false);

  



 
  /*login page navigatuon bar logo on click handle*/

  $(".logo-nav-loginpage").click(function(){
      window.location = 'http://localhost/shop/index.php';
  });

  /*end of logo handle in login page*/


//dur bara kichu bugte parchi na   oi script ta to .php ter modhhe lekha ache ota k ei file a likhle kaj korche na oi onload ter jonno ...hmom bujechii dara
  /*slide show*/




  







});//atar starting kothay??....konter ??ai j end }); atar sober upor a 





    window.onload = slider;
    function slider() {
        // body...
        $(".slide #1").show();
        $(".slide #1").delay(3200).hide("slide",{direction:'left'},200);

        var sc = $(".slide img").size();
        var count = 2;

      interval = setInterval(function(){
          startSlider(count);
          if(count == sc){
              count =1;
          }else{
              count = count + 1;
          }
      },3200); 

      function startSlider(count){
          $(".slide #"+count).show("slide",{direction:'right'},200);
          $(".slide #"+count).delay(3000).hide("slide",{direction:'left'},200);    
       };

    }



      $(".prev").click(function(){
        var newSlide = count - 1;
        // showSlide(newSlide);

        if(newSlide > sc){
            newSlide = 1;
        }else if(newSlide < 1){
            newSlide = sc;
        }
        startSlider(newSlide);

      });


    

    // function prev(){//ai function ta kothay call hoyeche??
    //     newSlide = sliderInt - 1;
    //     showSlide(newSlide);
    // }

    // function next(){
    //     newSlide = sliderInt + 1;
    //     showSlide(newSlide);
    // }

    function showSlide(Id){
        if(Id > count){
            Id = 1;
        }else if(Id < 1){
            Id = count;
        }
        startSlider(Id);
    }








