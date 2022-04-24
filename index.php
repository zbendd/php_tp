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
                //https://www.geeksforgeeks.org/how-to-parse-a-json-file-in-php/
                // Read the JSON file 
                $json = file_get_contents('data.json');
                
                // Decode the JSON file
                $articles = json_decode($json,true);

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