<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div class="box1">
		<div class="ptext">
			<span class="border">
				Welcome to thaïland	
			</span>
		</div>
	</div>

	<section class="section section-light">
	<p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae unde voluptates. Quidem nam temporibus eaque, tenetur porro similique laborum esse, ex unde vero nesciunt omnis, illo dolor numquam, quod libero adipisci ipsa accusantium ratione ad ipsum saepe eos labore. Quis cupiditate natus illum harum, nesciunt quaerat accusantium dolorum molestiae officia tempora asperiores tenetur ex, suscipit est deserunt quibusdam repellendus reiciendis quisquam quod autem deleniti exercitationem neque beatae non! Incidunt nisi error est accusantium rem repellat, culpa illum cumque laboriosam explicabo distinctio commodi perferendis soluta aliquam quibusdam quam, omnis reprehenderit nihil, sapiente ut eius quae eveniet porro atque. Hic, voluptas.
    </p>
    	</section>

	<div class="box2">
		<div class="ptext">
			<span class="border">
				Lieux a visiter.
			</span>
		</div>
	</div>

	<section class="section section-light">
	<p>
        Top 3 Lieux que j'ai préféré a visité en thaïland (ceci est un avis personnel).
		<a href="./lieu/lieu.php">
        <strong>lets go!!</strong>
        </a>
    </p>
    	</section>

    <div class="box3">
		<div class="ptext">
			<span class="border">
				Typiques plats Thaïlandais a gouter
			</span>
		</div>
	</div>

	<section class="section section-dark">
	<p>
        Top 3 Des plats Typiques Thaïlandais (ceci est un avis personnel ).
		<a href="./food/food.php">
         <strong>A vous d'essayer!!!</strong>
        </a>
    </p>

    	</section>

<div class="avis">
    <form method="post" action="menu.php" >
	    <fieldset>
	        <h3>Vos suggestions?</h3>
	        <label for="email">Votre email:</label>
	        <input type="email" name="email" id="email" required></br>
	        <label for="suggestion">Suggestion:</label>
	        <input type="text" name="suggestion" id="suggestion" maxlength="500" size="30"></br>
	        <input type="Submit" name="submit" value="Envoyé">
	    </fieldset>
	</form>

<?php
$error_msg = '';
$destinataire = 'salash@hotmail.fr';
$objet = 'Suggestion';
// if (strlen($message) <= 20) if(isset($_POST['Submit'])){
//  mail($destinataire, $objet, $message,$expediteur);
// echo '<p>votre message à bien été envoyé</p>';
// }

if(strlen($message) <=20 && isset($_POST['submit'])) {
	$expediteur = filter_var(htmlspecialchars(trim($_POST['email'])), FILTER_VALIDATE_EMAIL);
	$message = $_POST['suggestion'];
	 mail($destinataire, $objet, $message,$expediteur);
	//echo '<p>Votre message à bien été envoyé</p>';
	$error_msg = '<p>Votre message à bien été envoyé</p>';
}

?>

<div><?php echo $error_msg ?></div>

</div>

 <footer></footer>

</body>
</html>