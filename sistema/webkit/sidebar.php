<!-- NEW VERSION -->
<!--PROMO-->
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

	

<!-- Realmlist -->
<div class="right-sidebar">
<div id="sidebar-marketing" class="sidebar-module">	
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
	<!-- Players Online / Status Bar-->
	<?php
	$RealmQuerySQL = $db->Web("SELECT * FROM realms WHERE Id");
	while($Realm = $RealmQuerySQL->fetch_array()){
	?>
	<div class="sts a-realm sidebar-container box-shadow">
		<div id="head" class="clearfix text-shadow">
			<p id="name">
				<?php echo $Realm['realmName']; ?>
			</p>
			<p id="info">
				<?php echo $Realm['rate']; ?> Rates
			</p>
		</div>
		<div id="body" class="clearfix text-shadow">
			<p id="online">
				<?php
				$OnlineQuerySQL = $db->Personajes()->query("SELECT COUNT(*) FROM characters WHERE online='1'");
				$OnlinePlayers	= MysqliResultFlame($OnlineQuerySQL);
				?>
				<font color="#d28010"><?php echo $OnlinePlayers ?>/1000</font> Players Online
			</p>
			<p id="uptime">
				<?php
				$sql = $db->CuentaSQL("SELECT * FROM `uptime` WHERE realmid='{$Realm['Id']}' ORDER BY `starttime` DESC LIMIT 1");  
				$uptime_results = $sql->fetch_array();    

				if ($uptime_results['uptime'] > 2592000){
					$uptime =  round(($uptime_results['uptime'] / 30 / 24 / 60 / 60),2)." Mes(es)";
				}
				elseif ($uptime_results['uptime'] > 86400){
					$uptime =  round(($uptime_results['uptime'] / 24 / 60 / 60),2)." Dia(s)";
				}
				elseif ($uptime_results['uptime'] > 3600){
					$uptime =  round(($uptime_results['uptime'] / 60 / 60),2)." hrs";
				}else{
					$uptime =  round(($uptime_results['uptime'] / 60),2)." min";
				}
				?>
				<font color="#5b5851"><?php echo $uptime ?></font> Uptime
			</p>
		</div>
	</div>
	<?php
	}
	?>
	<div class="realmlist realm_cont_show">
		<p>
			set realmlist <font color="#817464"><?php echo REALMLIST ?></font>
		</p>
	</div>

	
	<!-- Vote Gifts -->
	<div class="vote_box">
		<div class="vote_image">
		</div>
		<h2>Vota por el Server y mensualmente estaremos dando 10 Creditos Qx a los 5 usuarios que mas voten en el mes.</h2>
	</div>
<!--VOTE SYSTEM-->

<!--VOTE SYSTEM END-->
	<!-- Server Progress -->
	<div class="stat_count_show">
		<div class="category" id="srv-stat-h">
			<span class="category-text"><a href="#">Progreso del Servidor</a></span>
		</div>
		<div id="srv-stat">
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 20%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 30%" style="width:30%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 50%" style="width:50%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Misiones</span>
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 60%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 11%" style="width:11%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 29%" style="width:29%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Logros</span>
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 30%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 40%" style="width:40%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 30%" style="width:30%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Mazmorras</span>
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 78%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 2%" style="width:2%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 20%" style="width:20%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Bandas</span>
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 30%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 40%" style="width:40%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 30%" style="width:30%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Hechizos</span>
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 30%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 60%" style="width:60%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 10%" style="width:10%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Clases</span>
			<div class="srv-bar">
				<div class="srv-bar-wrapp" title="Restante: 62%">
					<div class="un">
					</div>
					<div class="data-wrapp">
						<div class="works" title="Verificado: 28%" style="width:22%;">
							<span></span>
						</div>
						<div class="noworks" title="Progreso: 10%" style="width:13%;">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<span>Pagina web</span>
			Ultima actualizaci&oacute;n: Feb 18, 2016
		</div>
	</div>
</div>
<!-- Sidebar END -->