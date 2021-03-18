<h3>The str_shuffle() function (read it as : "shuffle string") makes it easy to ... shuffle the characters of a given text.</h3>
<?php
$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;
?>

<h3>Let's plan. The words need to stay the same. The letters inside the words are shuffled. So:</h3>

    <p>let's break the big chunk of text into an Array of words.<br>
    then let's loop through the array<br>
    for each element, lets shuffle its letters !</p>

    <?php
    $str= explode(" ", $str);

    foreach ($str as $word){
        
        echo str_shuffle($word)." ";
    }
    ?>
    <p>Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"</p>

    <?php
    $name = "émile";
    echo  mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
    ?>
    <p>Use the native function allowing you to display the current year.</p>

    <?php
    echo date("Y");
    ?>
    <p>Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.</p>
    <?php
    date_default_timezone_set('EUROPE/Brussels');

    echo date("l-d-m-y H:i:s"); //l minuscule jour de la semaine en entier et D en abrégé ex: Wednesday ou Wed
    ?>
    <p>Create a "Sum" function that takes 2 numbers and returns their sum.</p>
    <p>Improve that function so that it checks whether the argument is indeed a Number. <br>
    If not, it should display : "Error: argument is the not a number."</p>

    <?php
    function sum($x, $y){
        if(is_numeric($x) AND is_numeric($y)){
        return $x + $y;
        }else {
           echo "Error: argument is not a number.";
        }
    }
    echo sum(72, 1278);
    echo sum(b, 22);
    ?>
    <p>Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.<br>
Example: "In code we trust!" should return: ICWT.</p>

<?php

$words = "In code we trust!";

/*
foreach ($words as $w) {
  $acronym .= $w[0];
}
echo $words;
echo $acronym;*/

function initials($words) {
    $ret = '';
    foreach (explode(' ', $words) as $word)
        $ret .= strtoupper($word[0]); //make a string uppercase ----------- le pointégal .= 	Concatenation assignment 	$txt1 .= $txt2 	Appends $txt2 to $txt1
    return $ret;
}

echo initials($words);

?>
<p>Create a function that replaces the letters "a" and "e" with "æ".<br>
 Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return<br>
  "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".</p>

  <?php
            $characters = ["ae"];
            $words = ["caecotrophie","chaenichthys","microsphaera","sphaerotheca"];
                foreach ($words as $word){
                    $word = str_replace($characters,"æ",$word);
                    echo "$word ";
                }
 ?>
 <p>Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca</p>
 <?php
            $words2 = ["cæcotrophie","chænichthys","microsphæra","sphærotheca"];
                foreach ($words2 as $word2){
                        $word2= strtr($word2,"æ","ae");
                        echo "$word2 ";
                    }
  ?>
<p>    Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments :<br>
 the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :<br>

echo feedback("Incorrect email address", "error");<br>

which will produce this html :<br></p>

"div class="error">Error: Incorrect email address.div"<br>

<?php
/*
$message = "Incorrect email address";
$class = "error";
function feedback($message, $class){
    $classMessage = ucfirst($class);
    return "<div class='$class'>$classMessage:$message</div>";
}
echo feedback($message, $class);
*/
?>

<?php

$notice = " bien recu";
$warning = "warning";
$error = "error";
echo '<form action="function.php" method="post">';
    if ($_POST['mail'] == ""){
        echo '<p>Votre adresse mail: <input type="text" name="mail" value="'. $error. '"/></p>';

    }
    elseif ($_POST['mail'] == preg_match('/@/', $_POST['mail'])){
        echo '<p>Votre adresse mail: <input type="text" name="mail" value="'. $warning. '"/></p>';
    }else{
        echo '<p>Votre adresse mail: <input type="text" name="mail" value="'. $notice. '"/></p>';
    }
echo '<p><input type="submit" value="envoyer"></p></form>';

?>
<p>Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters,<br>
 the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words,<br>
  and underneath, a bouton with the text "Generate".</p>

  <h3>"Generate a new word"</h3>

  <?php
            
            function random($nb_car, $chaine = 'abcdefghijklmnopqrstuvwxyz')
            {
                $nb_lettres = strlen($chaine) - 1;
                $generation = '';
                for($i=0; $i < $nb_car; $i++)
                {
                    $pos = mt_rand(0, $nb_lettres);
                    $car = $chaine[$pos];
                    $generation .= $car;
                }
                return $generation;
            }
            echo '<h2>Générer un nouveau mot</h2>';
            echo "Proposition 1: " .random(rand(1, 5)). "</br>" ;
            echo "Proposition 2: " .random(rand(7, 15));


            echo '<form action="function.php" method="post">';
            echo '<p><input type="submit" value="Générer" onclick="random();"></p></form>';

        ?>

        <h3>De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"</h3>



<?php
//strtolower() - converts a string to lowercase.

$decap = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"; 
$decap = strtolower($decap);
echo $decap;
?>

<h3>In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :</h3>

<?php
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  
?>

<form action="function.php" method="post">
<p>Hauteur du cone en cm: <input type="number" name="coneHeight"/> </p>
<p>Rayon du cone en cm : <input type="number" name="coneRayon"/> </p>
<p><input type="submit" value="envoyer"></p>
</form> 
   
   
    <?php

    $radius = 5;
    $height = 2;
 function volume($radius, $height){
    return $radius*$radius*pi()*$height*(1/3);
}
          
            echo 'The volume of a cone which ray is ' .$radius. ' and height is '.$height.' = ' . volume($radius, $height) . ' cm<sup>3</sup><br />';  


           
        
    ?>



