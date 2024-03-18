<?php 
include("CLScalc.php");
?>

<!-- showing html and rendered variables -->
<html> 
   <body>
       <?php   
                  // initiating an object from a clasess and logic
                $objectSom = new clsCalc();	        // maak een object ofwel instantie 
                $renderedSom =  $objectSom->som(10);	// roep een methode aan op het object (methode van de class)echo $renderedSom;
                echo $renderedSom;

                $ajax1 = new team();
                $ajax1->naam = "Ajax 1e";
                $ajax1->plaats = "Amsterdam";
    
    ?>
   </body> 
</html>