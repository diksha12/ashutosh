<!DOCTYPE html>
<html>
<title>Know Me!!</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="customization.css">
<link rel="stylesheet" type="text/css" href="page_1.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<div class="outer_box">
	<div class="top_box">
		<div class="name">Ashutosh Singh</div>
		<button class= "know_me">Know Me!!</button>
		<button class="Compositions">My Compositions</button>
		<button class="Videos">Videos</button>
		<button class="Get_Involved">Get Involved</button>
	</div>
<div class="picture"></div>
<div class="about_ashu">
Ashutosh!!
</div>
<button class="fb"></button>
<button class="button youtube"></button>
<button class="button Linkedin"></button>
<button class="button tab2"></button>
<button class="button tab3"></button>
<div class="fixed">Ashutosh Singh</div>
</div>
<script type="text/javascript">

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
$(".fixed").click(function(){
	window.location.assign("/work/ashu/ashutosh/profile.php");
});
</script>

</body>
</html>
