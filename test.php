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
<style type="text/css">
.box1
{
	width: 100px;
	height: 100px;
	background-color: red;
	display: inline-block;
}
.box2
{
	width: 100px;
	height: 100px;
	background-color: black;
	display: inline-block;
}
.box3
{
	width: 100px;
	height: 100px;
	background-color: green;
	display: inline-block;
}
</style>
</head>
<body>
	<div class="box1"></div>
	<div class="box2"></div>
	<div class="box3"></div>
	<button class="click">click me</button>

</body>
<script type="text/javascript">
$('.click').click(function(){
	$( ".box1" ).slide("left" , 100 );
})
</script>
</html>