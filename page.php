<!DOCTYPE html>
<html>
<title>Ashutosh Singh</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="page.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>


<div class="outer_box1">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
<button class= "know_me">Know<br>Me!!</button>
    		<button class="Compositions">My<br>Compositions!!</button>
    		<button class="Videos">All<br>Videos!!</button>
    		<button class="Get_Involved">Get<br>Involved!!</button>
	</div>
	<div class="quote">quote_1!</div>
	<div class="radio1"></div>
	<div class="radio2"></div>
	<div class="radio3"></div>
</div>
<div class="outer_box2">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know<br>Me!!</button>
    		<button class="Compositions">My<br>Compositions!!</button>
    		<button class="Videos">All<br>Videos!!</button>
    		<button class="Get_Involved">Get<br>Involved!!</button>
	</div>
	<div class="quote">quote_2!</div>
	<div class="radio1"></div>
	<div class="radio2"></div>
	<div class="radio3"></div>
</div>
<div class="outer_box3">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know<br>Me!!</button>
    		<button class="Compositions">My<br>Compositions!!</button>
    		<button class="Videos">All<br>Videos!!</button>
    		<button class="Get_Involved">Get<br>Involved!!</button>
	</div>
	<div class="quote">Quote_3!</div>
	<div class="radio1"></div>
	<div class="radio2"></div>
	<div class="radio3"></div>
</div>


<script type="text/javascript">

$('.outer_box2').hide();
$('.outer_box3').hide();

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

$('.right_arrow').click(function(){
	$('.outer_box2').show();
	$('.right_arrow').hide();
	$(".left_arrow").show();
	$('.right_arrow_1').show();
	$('.left_arrow_1').show();
});
$('.left_arrow').click(function(){
	$('.outer_box2').show();
	$('.right_arrow').show();
	$(".left_arrow").hide();
	$('.right_arrow_1').show();
	$('.left_arrow_1').show();
});
$('.right_arrow_1').click(function(){
	$('.outer_box3').show();
	$('.right_arrow').show();
	$(".left_arrow").show();
	$('.right_arrow_1').hide();
	$('.left_arrow_1').show();
});
$('.left_arrow_1').click(function(){
	$('.outer_box1').show();
	$('.right_arrow').show();
	$(".left_arrow").show();
	$('.right_arrow_1').show();
	$('.left_arrow_1').hide();
});
$('.radio1').hover(function(){
	$(".radio1").css("background-color", "rgb(150, 133, 133)");
});
$('.radio2').hover(function(){
	$(".radio2").css("background-color", "rgb(150, 133, 133)");
});
$('.radio3').hover(function(){
	$(".radio3").css("background-color", "rgb(150, 133, 133)");
});
$('.radio1').mouseout(function(){
	$(".radio1").css("background-color", " rgb(211, 203, 203)");
});
$('.radio2').mouseout(function(){
	$(".radio2").css("background-color", " rgb(211, 203, 203)");
});
$('.radio3').mouseout(function(){
	$(".radio3").css("background-color", " rgb(211, 203, 203)");
});
$('.radio1').click(function(){
	$('.outer_box2').hide('fold');
	$('.outer_box3').hide('fold' );
	$('.outer_box1').show('fold' );
});
$('.radio2').click(function(){
	$('.outer_box1').hide('drop');
	$('.outer_box3').hide('drop');
	$('.outer_box2').show('drop');
});
$('.radio3').click(function(){
	$('.outer_box1').hide('drop');
	$('.outer_box2').hide('drop');
	$('.outer_box3').show('drop');
});

</script>
</body>
</html>