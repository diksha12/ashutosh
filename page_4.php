<!DOCTYPE html>
<html>
<title>Get Involved</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link rel="stylesheet" type="text/css" href="page_4.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="customization.css">
<link href='http://fonts.googleapis.com/css?family=Courgette|Playball' rel='stylesheet' type='text/css'>
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
	<div class="quote">
		<div class="half1">I See, you are interested</div>
		<div class="half2">In me!</div>
	</div>
	<div class="form">
		<form method="post">
			Name:
			<input type="text" name="f_name" placeholder="First name" class="fname">
			<input type="text" name="l_name" placeholder="Last name" class="lname"><br><br>
			date of Birth :
			<input type="date" name="dob" class="dob">
			<br><br>
			Sex (matters the most) :<br>
			<input type="radio" class="check_f" value="Female" name="gender">
			Female
			<input type="radio" name="gender" class="check_m" value="male">
			male
			<br>
			<input type="submit" value="Done" class="submit">
		</form>
	</div>
	<div class="pic1 pic"></div>
	<div class="pic2 pic"></div>
	<div class="pic3 pic"></div>
	<div class="pic4 pic"></div>
	<div class="pic5 pic"></div>
	<div class="pic6 pic"></div>
	<div class="pic7 pic"></div>
	<div class="pic8 pic"></div>
	<div class="pic9 pic"></div>
	<div class="pic10 pic"></div>

</div>
<script type="text/javascript">

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

</script>

	</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	$link = new mysqli('localhost','root','','ashutosh');
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];

		$query1 = "INSERT INTO get_involved (f_name,l_name,dob,gender) VAlUES (?,?,?,?)";
			$stmt1 = $link->prepare($query1);
			$stmt1->bind_param('ssss', $f_name, $l_name,$dob,$gender);
			
			$stmt1->execute();
			$stmt1->close();
}

?>
