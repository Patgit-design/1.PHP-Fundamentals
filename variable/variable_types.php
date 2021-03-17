<html>
  <head><title>Variable types</title></head>
  <body>
  	<?php 
       $myName = "Patricia";?>
       <p>Hi ! My name is <?php  echo $myName?></p>
       <?php
$age_du_visiteur = 45;
$couleurYeux = "green";
$family = array(
    0 => 'Gael', 
    1 => 'Patricia', 
    2 => 'Elwin', 
    3 => 'Elise', 
   ); 




echo 'I am ' . $age_du_visiteur . ' years old.';
?>
	
       <p>I am <?php  echo $age_du_visiteur?> years old.</p>
       <p>My eyes are <?php  echo $couleurYeux?>.</p>
       <p>The first person in my family is <?php echo $family[0]?>.</p>
       
       
  </body>
</html>