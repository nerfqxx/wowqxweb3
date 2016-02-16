<?php

if (!isset($_SESSION['email'])) {
    ?>
<div class="user-plate">
<a href="?login" class="card-character plate-logged-out" onclick="return Login.open()">
<span class="card-portrait"></span>
<span class="wow-login-key"></span>
<span class="login-msg"><strong><?php echo $cms_lang['103']; ?></strong><?php echo $cms_lang['104']; ?></span>
</a>
</div>
<?php
} else {
	?>
	<div class="user-plate">
<a href="" class="card-character plate-logged-out" >
<span class="card-portrait"></span>

<span class="login-msg"><strong>Seccion en construccion</strong> Gracias por tu paciencia!</span>
</a>
</div>
	
<?php
}
?>
