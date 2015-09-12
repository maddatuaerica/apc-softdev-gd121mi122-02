<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helper\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-index">

<script type="text/javascript"> 

var i = 0; 

var image = new Array();   

// LIST OF IMAGES 

image[0] = "../web/images/building.jpg";

image[1] =  "../web/images/facade2.jpg"; 

image[2] = "../web/images/facade3.jpg";


var k = image.length-1;    

var caption = new Array(); 

// LIST OF CAPTİONS  

caption[0] = ""; 

caption[1] = ""; 
  
function swapImage(){ 

var el = document.getElementById("mydiv"); 

el.innerHTML=caption[i]; 

var img= document.getElementById("slide"); 

img.src= image[i];  

if(i < k ) { i++;}  

else  { i = 0; } 

setTimeout("swapImage()",3000);  

} 

function addLoadEvent(func) { 

var oldonload = window.onload; 

if (typeof window.onload != 'function') { 

window.onload = func; 

} else  { 

window.onload = function() { 

if (oldonload) { 

oldonload(); 

} 

func(); 

} 

} 

}  

addLoadEvent(function() { 

swapImage(); 

});  

</script> 

<table style="border:3px solid #81DAF5;"> 

<tr> 

<td> 

<img name="slide" id="slide" alt ="my images" height="350" width="1125" src="building.jpg"/> 

</td> 

</tr> 

<tr> 

<td align="center"style="font:small-caps bold 15px georgia; color: #81DAF5;"> 

<div id ="mydiv"></div> 

</tr> 

</td> 

</table> 
<div class="site-about">
<div class="row">
            <div class="col-lg-5">
            	<h2>About</h2>
	<p>Arandia College was built as small school for elementary children until they expand and expand and now it has college department. 
	Arandia was the family name of the owner, Mrs. Yolanda Arandia.It is a non-sectarian private school in Paranaque. 
	The school has only a few students and also few staff. The school has its own database system and an administrator manages it. 
	As we keep coming to them, we have notice some problems in their systems so that's why we have proposed to create a new system for. 
	The project provides information privacy for the users. A login page is always prompt before anyone can access the main pages.</p>
</div>

<div class="col-lg-7">
	<h2>History</h2>
    <p>
        In 1999, Mr. Roselio R. Arandia and Dr. Yolanda DC. Arandia were offered to purchase a lot at 
		Lot 1 Blk. 1 F. Valarao St., Airport Village, Moonwalk by Mrs. Josefina Roxas, then owner of the said property. 
		The spouses initially refused to accept the offer as they had no plans to develop the property or use it for business, at the time. 
		As it happened, Mrs. Ma. Isabel Valerio, a family friend proposed to the Arandia spouses to put up a pre-school learning center in their garage. 
		Dr. Amaro E. Escario, who was then a retired District Supervisor of the Department of Education was asked by Dr. Arandia for assistance in putting up the Pre-school. 
		However, the experienced educator insisted that it should be a complete system - Pre-school, Elementary and Secondary levels. 
		The spouses agreed to the proposal of Dr. Escario and so ARANDIA ACADEMY, INC was founded. 
		Today, the ARANDIA COLLEGE, INC. system is a leading educational institution in southern Metro Manila but it did not grow overnight. 
		The school has evolved through 14 years of persistent praying, waiting, planning and staffing. 
		AC started Pre-school levels in 1999 with its first batch of 56 students and 8 faculty members. 
		The school was able to acquire additional 5 lots adjacent to the original school campus.
    </p>
</div>
</div>
