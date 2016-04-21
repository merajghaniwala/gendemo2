<?php
	include("connection.php");
	$slider = '';
	$sliderQ = mysql_query("select * from slider"); 
	while($sliderData = mysql_fetch_array($sliderQ))
	{
		$slider .= '<div class="owl-item" style="width: 1335px;"><div><div class="overlay"></div><div class="homepage-slider-caption"><h3>'.$sliderData['sliderText'].'</h3></div><img src="images/slider/'.$sliderData['sliderimage'].'" class="responsive-image" alt="img"></div></div></div>';
	}
	echo $slider;
?>