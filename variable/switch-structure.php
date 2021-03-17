<h3>9. The "Switch" structure.</h3>
<link rel="icon" href="data:;base64,iVBORw0KGgo=">

<form action="" method="post">
<p>Points <input type="text" name="note"> /20</p>
<p><input type="submit" value="OK"></p>
</form>
<?php

//$note = isset($_POST["note"]);
//$note =20;
//print_r($note);
//print_r(isset($note));
if (isset($_POST["note"])){
    $note = (isset($_POST["note"]));
    print_r($note);
switch ($note) {

        case ($note <= 4) :
            echo "This work is really bad. What a dumb kid!<br> ";
           // print_r($note);
            break;
        case (($note >= 5) && ($note <= 9)):
            echo "This is not sufficient. More studying is required.";
            break;
        case  ($note == 10):
            echo "barely enough!";
            break;
        case (($note >= 11) && ($note <= 14)):
            echo  "Not bad!";
            break;
        case (($note >= 15)  && ($note <= 18)):
            echo  "Bravo, bravissimo!";
            break;
        case ($note == 19):
            echo "<h4 style=color:red>Too good to be true : confront the <em>cheater!</em></h4>";
            break;
        case ($note == 20):  
            echo "<h4 style=color:red>Too good to be true : confront the <em>cheater!</em></h4>";  
        default:
        echo "The note is not valid !";
        break;
        
}}


?>
