<!DOCTYPE html>
<html>
<title>My Compositions!</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link rel="stylesheet" type="text/css" href="customization.css">
<link rel="stylesheet" type="text/css" href="page_2.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<div class="outer_box">
	<div class="top_box">
			<div class="name">Ashutosh Singh</div>
			<button class= "know_me">Know<br>Me!!</button>
    		<button class="Compositions">My<br>Compositions!!</button>
    		<button class="Videos">All<br>Videos!!</button>
    		<button class="Get_Involved">Get<br>Involved!!</button>
	</div>
	<div class="div1">
	<div class="box" id="video_div1"></div>
	<div class="box2" id="audio_div1">
		<audio controls>
			<source src="love u till the end!.mp3" type="audio/mp4">
			<source src="love u till the end!.ogg" type="audio/ogg">
		</audio>
	</div>
	<div class="box3" id="link_div1"></div>
	</div>

	<div class="div2">
	<div class="box" id="video_div2"></div>
	<div class="box2" id="audio_div2">
		<audio controls>
			<source src="love u till the end!.mp3" type="audio/mp4">
			<source src="love u till the end!.ogg" type="audio/ogg">
		</audio>
	</div>
	<div class="box3" id="link_div2"></div>
	</div>

	<div class="div1">
	<div class="box" id="video_div3"></div>
	<div class="box2" id="audio_div3">
		<audio controls>
			<source src="love u till the end!.mp3" type="audio/mp4">
			<source src="love u till the end!.ogg" type="audio/ogg">
		</audio>
	</div>
	<div class="box3" id="link_div3"></div>
	</div>

	<div class="div2">
	<div class="box" id="video_div4"></div>
	<div class="box2" id="audio_div4">
		<audio controls>
			<source src="love u till the end!.mp3" type="audio/mp4">
			<source src="love u till the end!.ogg" type="audio/ogg">
		</audio>
	</div>
	<div class="box3" id="link_div4"></div>
	</div>

	<div class="video" id="video"></div>
</div>

<script type="text/javascript">

$(".name").click(function(){
	window.location.assign("/work/ashu/ashutosh/page.php");
});
$('.name').click(function(){
	window.location.assign("/work/ashu/ashutosh/page.php");
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

$('#video').hide();

$('#video_div1').click(function(){
	$('.video').fadeIn();
	$('.video').append('<video width="640" height="360" controls><source src="Robbers.mp4" type="video/mp4"><source src="Robbers.ogg" type="video/ogg"></video>' );
});
$('#video_div2').click(function(){
	$('.video').fadeIn();
	$('.video').append('<video width="640" height="360" controls><source src="Robbers.mp4" type="video/mp4"><source src="Robbers.ogg" type="video/ogg"></video>' );
});
$('#video_div3').click(function(){
	$('.video').fadeIn();
	$('.video').append('<video width="640" height="360" controls><source src="Robbers.mp4" type="video/mp4"><source src="Robbers.ogg" type="video/ogg"></video>' );
});
$('#video_div4').click(function(){
	$('.video').fadeIn();
	$('.video').append('<video width="640" height="360" controls><source src="Robbers.mp4" type="video/mp4"><source src="Robbers.ogg" type="video/ogg"></video>' );
});
</script>

</body>