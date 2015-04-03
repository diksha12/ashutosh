<!DOCTYPE html>
<html>
<title>Know Me!!</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="customization.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="page_1.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>


<div class="box">
<div class="next">
    <div class="outer_box ">
    	 <div class="top_box">
    		<div class="name">Ashutosh Singh</div>
    		<button class= "know_me">Know<br>Me!!</button>
    		<button class="Compositions">My<br>Compositions!!</button>
    		<button class="Videos">All<br>Videos!!</button>
    		<button class="Get_Involved">Get<br>Involved!!</button>
    	</div>
    <div class="picture"></div>
    <div class="about_ashu">
    Ashutosh!!
    </div>
    <div class="connect_pic"><img src="arrow_right.png" alt="right arrow" height="45" width="45"></div>
    <div class="connect">Connect</div>
    <div class="connecting_div">
    <button class="fb" id="fb"></button>
    <button class="button youtube" id="yt"></button>
    <button class="button Linkedin" id="li"></button>
    <button class="button soundcloud" id="sc"></button>
    <button class="button myspace" id="ms"></button
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

$('.name').click(function(){
  window.location.assign("/work/ashu/ashutosh/page.php");
});
$('#fb').mouseover(  
   function(){  
     $("#fb").css("opacity", "1"); 
   });  
$('#fb').mouseout(  
   function(){  
     $("#fb").css("opacity", "0.4"); 
   });  

$('#yt').mouseover(  
   function(){  
     $("#yt").css("opacity", "1"); 
   });  
$('#yt').mouseout(  
   function(){  
     $("#yt").css("opacity", "0.4"); 
   });  

$('#li').mouseover(  
   function(){  
     $("#li").css("opacity", "1"); 
   });  
$('#li').mouseout(  
   function(){  
     $("#li").css("opacity", "0.4"); 
   });  

$('#sc').mouseover(  
   function(){  
     $("#sc").css("opacity", "1"); 
   });  
$('#sc').mouseout(  
   function(){  
     $("#sc").css("opacity", "0.4"); 
   }); 
   $('#ms').mouseover(  
   function(){  
     $("#ms").css("opacity", "1"); 
   });  
$('#ms').mouseout(  
   function(){  
     $("#ms").css("opacity", "0.4"); 
   });  

$(".know_me").click(function(){
  $('.box').hide();
	window.location.assign("/work/ashu/ashutosh/page_1.php").fadeIn();
});
$(".know_me").mouseover(function(){
	$(".know_me").css("background-color", "rgb(186, 179, 179)");
  $(".know_me").css("color", "rgb(157, 62, 62)");
});
$(".know_me").mouseout(function(){
	$(".know_me").css("background-color", "aliceblue");
  $(".know_me").css("color", "black");
});
$(".Compositions").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_2.php");
});
$(".Compositions").mouseover(function(){
	$(".Compositions").css("background-color", "rgb(186, 179, 179)");
  $(".Compositions").css("color", "rgb(157, 62, 62)");
});
$(".Compositions").mouseout(function(){
	$(".Compositions").css("background-color", "aliceblue");
  $(".Compositions").css("color", "black");
});
$(".Videos").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_3.php");
});
$(".Videos").mouseover(function(){
	$(".Videos").css("background-color", "rgb(186, 179, 179)");
  $(".Videos").css("color", "rgb(157, 62, 62)");
});
$(".Videos").mouseout(function(){
	$(".Videos").css("background-color", "aliceblue");
  $(".Videos").css("color", "black");
});
$(".Get_Involved").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_4.php");
});
$(".Get_Involved").mouseover(function(){
	$(".Get_Involved").css("background-color", "rgb(186, 179, 179)");
  $(".Get_Involved").css("color", "rgb(157, 62, 62)");
});
$(".Get_Involved").mouseout(function(){
	$(".Get_Involved").css("background-color", "aliceblue");
  $(".Get_Involved").css("color", "black");
});

$('.connecting_div').hide();

$('.connect').hover(function(){
  $(".connect").css("opacity", "1");
  $(".connect_pic").css("opacity", "1");
  $('.connecting_div').fadeIn();
  $('.connect').fadeOut();

});
$('.connect_pic').hover(function(){
  $(".connect").css("opacity", "1");
  $(".connect_pic").css("opacity", "1");
});
$('.connect').mouseout(function(){
  $(".connect").css("opacity", "0.4");
  $(".connect_pic").css("opacity", "0.4");
  $('.connecting_div').hide();
});
$('.connect_pic').mouseout(function(){
  $(".connect").css("opacity", "0.4");
  $(".connect_pic").css("opacity", "0.4");
});
$(".connect").click(function(){
  $(".connect_pic").show();
  $(".connect").hide();
  $('.connecting_div').show();
  
});
$(".connect_pic").click(function(){
  $(".connect").toggle();
  $('.connecting_div').toggle();
})

</script>

</body>
</html>
