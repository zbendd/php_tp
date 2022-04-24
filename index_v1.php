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
                $paragraphes = array( $p1,$p1,$p2,$p3); 

                $imgs = array("langages-cv-huile.jpg" ,
                                "ddos-mr-incredible-Omiganox.webp" ,
                                "meme-angry-cat-alinenosekai.jpg" 
                            ); 
                $urlLinks = array("./presentation.html"  ,
                            "./produits.html" ,
                            "#" 
                        ); 
                $textLinks = array( "Voir la présentation" ,
                                "Voir les produits" ,
                                "Créer son compte" 
                    ); 
                $titles = array( "Présentation" ,
                                "Produits" ,
                                "Un compte, quel idée !" 
                    ); 
                
                //shuffle($imgList);
                foreach ($imgs as $i=>$img ) {
                    echo "<article> "; 
                    echo "  <div class='imgContainer'> ";
                    echo "     <img src='https://lesjoiesducode.fr/content/045/$img' alt='TODO'>  "; 
                    echo "  </div>  "; 
                    echo "  <div class='textContainer'> ";
                    echo "    <a href=$urlLinks[$i]>$textLinks[$i]</a>" ;  
                    echo "    <h3>$titles[$i]</h3>" ;   
                    foreach ($paragraphes as $p) { 
                        echo " <p>$p</p>"; 
                    }
                    echo "  </div>  "; 
                    echo "</article>";
                }
 
                
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