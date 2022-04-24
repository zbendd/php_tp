<?php require_once('src/Entity/Product.php'); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Youpii - Liste des produits</title>
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
	    
	    <div id="main" class="productListPage">
	        <nav>
<?php   
    $tags = array('Informatique','Collègue','Hébergement','Code','baba');
    $product1 = new Product('Titre du produit avec un nom très long', 'https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg',$tags);
    $product2 = new Product('Titre du produit', 'https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg',$tags);
    $product3 = new Product('Titre du produit', 'https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg',$tags);
    $product4 = new Product('Titre du produit', 'https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg',$tags);
    $product5 = new Product('Titre du produit', 'https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg',$tags);
    $product6 = new Product('Titre du produit', 'https://lesjoiesducode.fr/content/045/langages-cv-huile.jpg',$tags);
    $products = array($product1, $product2,$product3, $product4,$product5, $product6);

    foreach($products as $i)
    {
?>
                <div class="productThumbnail">
                    <a href="./produit-details.html">
                        <h3><?=$i->getName()?></h3>
                        <div class="imgContainer"><img src=<?=$i->getImgUrl()?> alt="illustration du produit"/></div>
                    </a>
                    <nav class="tagsContainer">
                    <?php 
                        foreach($i->getTags() as $tag)
                        {  
                            echo "<a href='#'>" .$tag. "</a>" ;  
                        }
                    ?>
                    </nav>
                </div> 
<?php
    }
?>
	        </nav>
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
