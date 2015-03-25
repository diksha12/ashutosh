<!DOCTYPE html>
<html>
<title>Ashutosh Singh</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="profile.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

<div id="start" class="start">
<div class="bubblingG">
<span id="bubblingG_1">
</span>
<span id="bubblingG_2">
</span>
<span id="bubblingG_3">
</span>
</div>
</div>

<div class="next" id="next">
<div class="outer_box1">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know Me!!</button>
		<button class="Compositions">My Compositions</button>
		<button class="Videos">Videos</button>
		<button class="Get_Involved">Get Involved</button>
	</div>
	<div class="right_arrow"></div>
	<div class="quote">quote_1!</div>
</div>
<div class="outer_box2">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know Me!!</button>
		<button class="Compositions">My Compositions</button>
		<button class="Videos">Videos</button>
		<button class="Get_Involved">Get Involved</button>
	</div>
	<div class="left_arrow_1"></div>
	<div class="right_arrow_1"></div>
	<div class="quote">quote_2!</div>
</div>
<div class="outer_box3">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know Me!!</button>
		<button class="Compositions">My Compositions</button>
		<button class="Videos">Videos</button>
		<button class="Get_Involved">Get Involved</button>
	</div>
	<div class="left_arrow"></div>
	<div class="quote">Quote_3!</div>
</div>
</div>

<script type="text/javascript">


$('#start').hide();
$('#start').fadeIn();
$('#start').fadeOut( 11600);
$('.next').fadeIn();

$('.right_arrow').click(function(){
	
});


$(".know_me").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_1.php");
});
$(".know_me").mouseover(function(){
	$(".know_me").css("background-color", "green");
});
$(".know_me").mouseout(function(){
	$(".know_me").css("background-color", "red");
});
$(".Compositions").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_2.php");
});
$(".Compositions").mouseover(function(){
	$(".Compositions").css("background-color", "green");
});
$(".Compositions").mouseout(function(){
	$(".Compositions").css("background-color", "red");
});
$(".Videos").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_3.php");
});
$(".Videos").mouseover(function(){
	$(".Videos").css("background-color", "green");
});
$(".Videos").mouseout(function(){
	$(".Videos").css("background-color", "red");
});
$(".Get_Involved").click(function(){
	window.location.assign("/work/ashu/ashutosh/page_4.php");
});
$(".Get_Involved").mouseover(function(){
	$(".Get_Involved").css("background-color", "green");
});
$(".Get_Involved").mouseout(function(){
	$(".Get_Involved").css("background-color", "red");
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

</script>
</body>
</html>