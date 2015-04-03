<!DOCTYPE html>
<html>
<title>Get Involved</title>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="other.css">
<link rel="stylesheet" type="text/css" href="page_4.css">
<link rel="stylesheet" type="text/css" href="page4.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="customization.css">
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
	<div class="pic1 pic" id="pic1"></div>
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
$(".name").click(function(){
	window.location.assign("/work/ashu/ashutosh/page.php");
});
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


$(window).load(function() {          
  var i =0;
  var images = ['pic8.jpg','pic1.jpg','pic3.jpg'];

  setInterval(function(){  
   $('#pic1').fadeOut(1000, function () 
   {
   $('#pic1').css('background-image', 'url(' + images [i++] +')');
   $('#pic1').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic7.jpg','pic6.jpg','pic2.jpg'];

  setInterval(function(){  
   $('.pic2').fadeOut(1000, function () 
   {
   $('.pic2').css('background-image', 'url(' + images [i++] +')');
   $('.pic2').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic2.jpg','pic4.jpg','pic5.jpg'];

  setInterval(function(){  
   $('.pic3').fadeOut(1000, function () 
   {
   $('.pic3').css('background-image', 'url(' + images [i++] +')');
   $('.pic3').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic1.jpg','pic4.jpg','pic2.jpg'];

  setInterval(function(){  
   $('.pic4').fadeOut(1000, function () 
   {
   $('.pic4').css('background-image', 'url(' + images [i++] +')');
   $('.pic4').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic5.jpg','pic6.jpg','pic1.jpg'];

  setInterval(function(){  
   $('.pic5').fadeOut(1000, function () 
   {
   $('.pic5').css('background-image', 'url(' + images [i++] +')');
   $('.pic5').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic6.jpg','pic1.jpg','pic5.jpg'];

  setInterval(function(){  
   $('.pic6').fadeOut(1000, function () 
   {
   $('.pic6').css('background-image', 'url(' + images [i++] +')');
   $('.pic6').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic3.jpg','pic4.jpg','pic1.jpg'];

  setInterval(function(){  
   $('.pic7').fadeOut(1000, function () 
   {
   $('.pic7').css('background-image', 'url(' + images [i++] +')');
   $('.pic7').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic2.jpg','pic3.jpg','pic5.jpg'];

  setInterval(function(){  
   $('.pic8').fadeOut(1000, function () 
   {
   $('.pic8').css('background-image', 'url(' + images [i++] +')');
   $('.pic8').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic3.jpg','pic7.jpg','pic1.jpg'];

  setInterval(function(){  
   $('.pic9').fadeOut(1000, function () 
   {
   $('.pic9').css('background-image', 'url(' + images [i++] +')');
   $('.pic9').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
 });

$(window).load(function() {          
  var i =0;
  var images = ['pic2.jpg','pic3.jpg','pic4.jpg'];

  setInterval(function(){  
   $('.pic10').fadeOut(1000, function () 
   {
   $('.pic10').css('background-image', 'url(' + images [i++] +')');
   $('.pic10').fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
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
