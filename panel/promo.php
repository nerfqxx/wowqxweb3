<?php
/**
 * Random images
 */
//$imagenes[0]='0.jpg';
//$imagenes[1]='1.jpg';
//$imagenes[2]='2.jpg';
//$imagenes[3]='3.jpg';
//$imagenes[4]='4.jpg';
//$imagenes[5]='5.jpg';
//$imagenes[6]='6.jpg';
$imagenes[7]='7.jpg';
$imagenes[8]='8.jpg';
$imagenes[9]='9.jpg';
$imagenes[10]='10.jpg';

/**
 * Description Images
 */
//$descripcion[0]='Random Image 0';
//$descripcion[1]='Random Image 1';
//$descripcion[2]='Random Image 2';
//$descripcion[3]='Random Image 3';
//$descripcion[4]='Random Image 4';
//$descripcion[5]='Random Image 5';
//$descripcion[6]='Random Image 6';
$descripcion[7]='Random Image 7';
$descripcion[8]='Random Image 8';
$descripcion[9]='Random Image 9';
$descripcion[10]='Random Image 10';

/**
 * URL of random images
 */
//$href[0]='';
//$href[1]='';
//$href[2]='';
//$href[3]='';
//$href[4]='';
//$href[5]='';
//$href[6]='';
$href[7]='';
$href[8]='';
$href[9]='account/register';
$href[10]='account/register';

/* Here it is important to give it the number of images starting from 0 */
$i=rand(7,10);
#####  4 give error
?>
<div id="sidebar-marketing" class="sidebar-module">
	<div class="bnet-offer">
		<!--  -->
		<div class="bnet-offer-bg">
			<a href="<?php echo $href[$i];?>" id="ad10069924" class="bnet-offer-image">
			<?php
				//$con=mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
				//$query= "SELECT * FROM themes WHERE active=1";
				//$result=mysqli_query($con,$query);
				//while($row=mysqli_fetch_array($result))
				//{
				//$CSS_LINK = $row['css_link'];
				/* Show random picture */
				echo '<img src="'.BASE_URL.'panel/'.$imagenes[$i].'" width="300" height="250" alt="'.$descripcion[$i].'"/>'; 
				//}
			?>
			</a>
		</div>
	</div>
</div>