<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>edomo - Tuteurs en Mathématiques</title>		
		<link rel="stylesheet" type="text/css" href="style.css" />
		
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
		<script type='text/javascript' src='javascripts/jquery.tipsy.js'></script>
		<script type='text/javascript'>
		$(function() {
			$('#tipsy').tipsy({fade: true, gravity: 's'});
		});
		</script>
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body>
	<?php 
		function ecrire($fichier,$texte)
		{
		$fp = fopen ($fichier, "r+");  
		$buffer = fgets ($fp, 1000);  
		$buffer.=$texte;
		$buffer.= ";";
		fseek ($fp, 0);  
		fputs ($fp, $buffer);  
		fclose ($fp);
		return 0;  
		}
	if (isset($_POST['mail'])) {
		ecrire("mailinglist.txt",$_POST['mail']);
	}	
	?>
		<div class="wrapper">
			<img src="images/logo.png" alt="YourLogo" title="YourLogo"/>
			<div class="hr"></div>
			<h1>Le soutien scolaire va changer</h1>
			<p>edomo est en train de se faire chouchouter par son équipe.<strong> Progression :</strong></p>
						
			<section class="progress">
				<?php $aujourdhui = mktime(0, 0, 0, date("m"), date("d"), date("y")); ?>
				<?php $debut = mktime(0, 0, 0, 12, 1, 2011); ?> 
				<?php $fin = mktime(0, 0, 0, 1, 1, 2012); ?> 
				<?php $pourcentage = ceil(($aujourdhui-$debut)/($fin-$debut)*100) ?>
				<?php if($pourcentage>100){$pourcentage=100;}; ?>
				<div class="progress-bar-container" id="tipsy" title="<?php echo($pourcentage);?>%">
					<article class="progress-bar" style="width:<?php echo($pourcentage);?>%"></article>
				</div>
				<article class="txt-launch-day-hat"></article>
			</section>
			
			<div class="hr"></div>
<?php		if (isset($_POST['mail'])) {
		?>
		<h2>Merci de nous suivre !</h2>
<?php } 	
			else {
				?>
			
			<section class="mailing-list">
				<h2 style="text-align:center;">Ne manquez pas le lancement de edomo :</h2>
				<form action="index.php" method="post">
					<input type="text" id="mail" name="mail" value="your@email.com" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
					<input type="submit" value="Envoyer">	
				</form>
				<?php } ?>
			</section><div class="clear"></div>
			<div class="hr"></div>
			
			<p class="credit" style="color:rgb(15,15,15);">Template by <a href="http://www.medialoot.com" style="color:rgb(30,30,30)">MediaLoot</a></p>
		</div>
	</body>
</html>