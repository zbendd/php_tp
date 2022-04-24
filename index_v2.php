<?php
/*
 * TP1 PHP
 * 
 * Auteur : Zahira
 *
 */
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Youpii</title>
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
        	        <a href="./produits.html">Produits</a>
    	        </nav>
    	        
    	        <nav>
        	        <a href="#">Panier</a>
        	        <a href="#">Compte</a>
    	        </nav>
	        </nav>
	    </header>
	    
	    <div id="main" class="indexPage">
        <?php  
                //https://stackoverflow.com/questions/21177001/php-create-an-array-for-every-paragraph
                $p1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.";
                $p2 = "Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula.";
                $p3 = "Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien.";               
                 
                $articles = array(
                    "article1" => array(  "img"=> "langages-cv-huile.jpg",
                            "urlLink"=> "./presentation.html" ,
                            "textLink"=> "Voir la présentation",
                            "title"=> "Présentation" ,
                            "paragraphe"=> array($p1,$p1,$p2,$p3)    
                    ),
                    "article2" => array(  "img"=> "ddos-mr-incredible-Omiganox.webp",
                            "urlLink"=> "./produits.html" ,
                            "textLink"=> "Voir les produits",
                            "title"=> "Produits" ,
                            "paragraphe"=> array($p1,$p1,$p2,$p3)    
                    ), 
                    "article3" => array(  "img"=> "meme-angry-cat-alinenosekai.jpg",
                            "urlLink"=> "#" ,
                            "textLink"=> "Créer son compte",
                            "title"=> "Un compte, quel idée !" ,
                            "paragraphe"=> array($p1,$p1,$p2,$p3)    
                    )   
                );
                
                //shuffle($imgList);
                
                $keys = array_keys($articles);
                foreach ($keys as $i ) {
                    echo "<article> "; 
                    echo "  <div class='imgContainer'> ";
                    echo "     <img src='https://lesjoiesducode.fr/content/045/" . $articles[$i]['img']  . "' alt='TODO'>  "; 
                    echo "  </div>  "; 
                    echo "  <div class='textContainer'> ";
                    echo "    <a href=" .$articles[$i]['urlLink'] . " >" . $articles[$i]['textLink'] . " </a>" ;  
                    echo "    <h3>" .$articles[$i]['title'] . " </h3>" ;   
                    //print_r($articles[$i]['paragraphe']);  
                    foreach ($articles[$i]['paragraphe'] as $p) { 
                        echo " <p>$p</p>"; 
                    }
                    echo "  </div>  "; 
                    echo "</article>";
                }
 
                // used to generate json file : 
               // $toJSON = json_encode( $articles); 
               /// echo $toJSON;
                
            ?>
        </div>
        <footer class="menu">
	        <nav>
    	        <a href="/"><h1>Youpii</h1></a>
    	        
    	        <nav>
        	        <a href="./presentation.html">Présentation</a>
        	        <a href="./produits.html">Produits</a>
    	        </nav>
    	        
    	        <nav>
        	        <a href="#">Panier</a>
        	        <a href="#">Compte</a>
    	        </nav>
	        </nav>
	    </footer>
	</body>
</html>	