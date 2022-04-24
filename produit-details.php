<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Youpii - Produit - Titre du produit</title>
		<!-- Encodage des caractères -->
		<meta charset="UTF-8">
		<!-- Icône de la page -->
		<link rel="icon" href="https://www.php.net/favicon.ico">
		<!-- inclusion des styles -->
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	    <header class="menu">
	        <nav>
    	        <a href="./"><h1>Youpii</h1></a>
    	        
    	        <nav>
        	        <a href="./presentation.html">Présentation</a>
        	        <a href="./produits.html" class="active">Produits</a>
    	        </nav>
    	        
    	        <nav>
        	        <a href="#">Panier</a>
        	        <a href="#">Compte</a>
    	        </nav>
	        </nav>
	    </header>
	   
	
	    <div id="main" class="productDetailsPage"> 
			<?php 
			    $knownProducts = [0, 1, 2, 3, 4];
				$productId = $_GET['id'];
				if(in_array( $productId , $knownProducts)){
			?>
					<img src="https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg" alt="illustration du produit"/>
					
					<div class="order">
						<form>
							<input type="number" value="1" step="1" min="1"/>
							<input type="submit" value="Ajouter au panier"/>
						</form>
					</div>
					
					<div class="description">
						<h2>Titre du produit</h2>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.</p>
						<p>Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula.</p>
						<p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien.</p>
						
						<nav class="tagsContainer">
							<a href="#">Informatique</a>
							<a href="#">Collègue</a>
							<a href="#">Hébergement</a>
							<a href="#">Code</a>
						</nav>
					</div>
				<?php 
					}else{
						echo "<h2>ERROR 404 : Product not found ! </h2>";
					}
				?>
	    </div>
	    <footer class="menu">
	        <nav>
    	        <a href="/"><h1>Youpii</h1></a>
    	        
    	        <nav>
        	        <a href="./presentation.html">Présentation</a>
        	        <a href="./produits.html" class="active">Produits</a>
    	        </nav>
    	        
    	        <nav>
        	        <a href="#">Panier</a>
        	        <a href="#">Compte</a>
    	        </nav>
	        </nav>
	    </footer>
	</body>
</html>
