<?php
$fonts = "verdana";
//$bgcolor = "#FB8637";
$bgcolor = "#444";
$fontcolor = "#FC8C41"

?>



<!doctype html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
	body{font-family:<?php echo $fonts;?>}
	.phpcoding{width:900px; margin:0 auto;background:<?php echo "#ddd";?>;}
	.headeroption, .footeroption{background:<?php echo $bgcolor; ?>;color:<?php echo $fontcolor ;?>;text-align:center;padding:20px;}
	.headeroption h2, .footeroption h2{margin:0}
	.maincontent{min-height:400px;padding:20px;}
	</style>

</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
	<h2><?php echo "PHP Fundamentals Training";?></h2>
	</section>
<section class="maincontent">
	<?php
	/*sum
	echo"I love php";
	$a = 5;
	$b = 10;
	$c = $a+$b;
	echo "Total value = ".$c;*/
	//$a = "Sj_innovation";
	//var_dump($a);
	/*Object
	Class Student{
		function department(){
		return "CSE";
	}
	
	function details(){
		echo $this->department();
	}
	}
	$st = new Student;
	$st->details();*/
	
	/*Strings*/
	
	$x ="PHP is easy";
	//echo strlen($x);
	//echo str_word_count($x);
	//echo strrev($x);
	//echo strpos($x,"easy");
	echo str_replace("PHP","HTML",$x);
	?>
</section>
	<section class="footeroption">
	<h2><?php echo "www.trainingwithliveproject.com";?></h2>
	</section>
</div>
</body>



</html>