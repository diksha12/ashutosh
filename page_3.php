<!DOCTYPE html>
<html>
<title>Videos</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link rel="stylesheet" type="text/css" href="customization.css">
<link rel="stylesheet" type="text/css" href="page3.css">
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
	<div class='all_videos'></div>
<div class="outer_box">
	<div class="template1">Recommended</div>
	<div class="template2"> My Videos</div>

	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know<br>Me!!</button>
    		<button class="Compositions">My<br>Compositions!!</button>
    		<button class="Videos">All<br>Videos!!</button>
    		<button class="Get_Involved">Get<br>Involved!!</button>
	</div>
	<div class="videos_div">

	<div class="div1 box1">	</div>
	<div class="div2 box1"></div>
	<div class="div3 box1"></div>
	<div class="div4 box1"></div>
	<div class="div5 box1"></div>
	<div class="div6 box1"></div>
	<div class="div7 box2"></div>
	<div class="div8 box2"></div>
	<div class="div9 box2"></div>
	<div class="div10 box2"></div>
	<div class="div11 box2"></div>
	<div class="div12 box2"></div>
	<div class="div13 box2"></div>
	<div class="div14 box2"></div>
	<div class="div15 box2"></div>
	<div class="div16 box2"></div>
	<div class="div17 box2"></div>
	<div class="div18 box2"></div>
	<div class="div19 box2"></div>
	<div class="div20 box2"></div>
	<div class="div21 box2"></div>
	<div class="div22 box2"></div>
	<div class="div23 box2"></div>
	<div class="div24 box2"></div>
</div>
</div>
	<script type="text/javascript">
$('.all_videos').hide();

$(".know_me").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_1.php");
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

$('.div1').click(function(){
	$('.template2').hide();
	$('.template1').hide();
	$('.all_videos').fadeIn();
	$( '.all_videos' ).append( '<iframe width="640" height="360" src="https://www.youtube.com/embed/MwpMEbgC7DA" frameborder="0" allowfullscreen></iframe>' );
})
</script>
</body>