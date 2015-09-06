<?php

/* @var $this yii\web\View */

$this->title = 'Arandia College';
?>
<div class="site-index">

   <div class="jumbotron">
                <h3>Arandia College, Inc. is a leading private educational institution in southern Metro Manila with campuses in Parañaque City and Taguig City providing pre-school, elementary, high school, and tertiary education courses.</h3>
			
   </div-->  

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

<<<<<<< HEAD
<img name="slide" id="slide" alt ="my images" height="350" width="1125" src="building.jpg"/> 
=======
<img name="slide" id="slide" alt ="my images" height="500" width="1000" src="building.jpg"/> 
>>>>>>> 2632c89e4d736d0d5ba93bd8a7567ed7595099fb

</td> 

</tr> 

<tr> 

<td align="center"style="font:small-caps bold 15px georgia; color: #81DAF5;"> 

<div id ="mydiv"></div> 

</tr> 

</td> 

</table> 

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Vision:</h2>

                <p>The Arandia College Inc., a private non-stock, nonprofit, and non- sectarian institution of learning envisions the full development of the learner through proper 
                    instruction and training with complete physical facilities to produce individuals who are God-fearing, values-oriented, morally upright and nationalistic capable 
                    of competing in the global revolution of knowledge which contributes largely in the progress of the community, society and country.</p>
            </div>
            <div class="col-lg-4">
                

                <p>In pursuit of Vision, Arandia College Inc. commits to:
                        <p>A.   Provide affordable quality education through effective instruction by competent teachers under the leadership of caring school officials.</p>
                        <p>B.   Inculcate love of God, Country, Humanity and Nature.</p>
                        <p>C.   Promote culture of competitiveness in all sectors of the academic community.</p>
                        <p>D.   Develop young citizens' rights, duties and responsibilities for active participation in the progressive and productive home and community life.</p>
                        <p>E.   Keep the learner abreast of technological, vocational and global trends and issues.</p>
                        <p>F.   Enrich teachers; competencies in bringing out their best as educators.</p>
                        <p>G.   Commit the school as leading institution in the society.</p>

            </div>
            <div class="col-lg-4">
                <h2>Offers:</h2>

                 <p>Nursery - 3 years and 3 years old and a half by June of the academic year.</p>
                 <p>Kinder - 4 years and 4 years old and a half by June of the academic year.</p>
                 <p>Preparatory - 5 years and 5 years old and a half by June of the academic year.</p>
                 <p> Elementary</p>
                 <p>High School</p>
            </div>
        </div>

    </div>
</div>
