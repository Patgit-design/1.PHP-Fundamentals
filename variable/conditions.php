<?php
/*
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if($room_is_filthy = true){
	echo "Yuk, Room is dirty : let's clean it up !";
//	cleanup_room();
	echo "<br>Room is now clean!<br>";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

/// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $possible_states[0] == $room_filthiness){
	echo "Yuk, Room is Disgusting! Let's clean it up !<br>";
} else if( $possible_states[1]== $room_filthiness ){
	echo "Yuk, Room is filthy : let's clean it up !";
}else if( $possible_states[2]== $room_filthiness ){
	echo "Yuk, Room is dirty : let's clean it up !";
}else if( $possible_states[3] == $room_filthiness){
	echo "Yuk, Room is clean : You're on the good way ! ";
}  

else {
	echo "<br>Nothing to do, room is neat.";
}


// 2. "Different greetings according to time" Exercise
//date_default_timezone_set("Europe/Brussels");
//$now = date("H:i:sa"); // How to get the current time in PHP ? Google is your friend ;-)
//$now = [date('H'), date('i')];
//echo $now [0];
//echo $now[1];
// Test the value of $now and display the right message according to the specifications.

/*
if( $now[0] >= 5 OR $now[0] <=9 ){
    echo "Good morning !";
} else if ($now[0] >= 9   AND $now[0] <= 12 AND $now [1] >=1 ){
    echo "Good day !";
}else if ($now[0] >=12  AND $now[0] <= 16 AND $now[1] >=1){
    echo "Good afternoon !";
}else if ($now[0] >= 16  AND $now[0] <= 21 AND $now[1] >= 1){
    echo "Good evening ! ";
}else {
    echo "Good Night !";
}*/
date_default_timezone_set("Europe/Brussels");
$now = date("Hi");
echo $now;

// Test the value of $now and display the right message according to the specifications.

if( $now == "0500" AND $now <= "0900"){
    echo "Good morning !";
} elseif ($now >= "0901" AND $now <= "1200") {
    echo " Good day !";
}elseif ($now >="1201" AND $now <="1600") {
    echo "Good afternoon !<br>";
}elseif ($now >="1600" AND $now <="2100") {
    echo "Good evening !";
}else{
    echo  "Good night !";
}
?>

<h3> 3. "Different greetings according to age" Exercise </h3>

<?php
$age = $_GET['age']; // CETTE PARTIE FONCTIONNE

if (isset($age)){
	if($age < 0){
		echo 'liar';
	}elseif ($age <12){
		echo 'Hello kid';
	}elseif($age >= 12 AND $age < 18 ){
		echo 'Hello Teenager boy';
	}elseif($age >= 18 OR $age <= 115){
		echo 'Hello Man<br>'; 
	}
	else{
		echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?'; 
	}

}



?>
<br>
<h3>4. Display a different greeting according to the user's age and gender.</h3>

<p>Improve the previous form to add another question: "Man or Woman?". <br>
Use an input of type radio to capture the data.</p>
 

<?php


$age = $_GET['age'];  
$sex = $_GET['sex'];

if (isset($sex) == "male"){

	if (isset($age)){
		if($age < 0){
			echo 'liar';
		}elseif ($age <12){
			echo 'Hello kid';
		}elseif($age >= 12 AND $age < 18 ){
			echo 'Hello Teenager boy';
		}elseif($age >= 18 OR $age <= 115){
			echo 'Hello Man'; 
		}
		else{
			echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?'; 
		}
					}
}
//if (isset($_GET['sex']) == "female")
/*{
	if ($age){
		if($age < 0){
			echo 'liar';
		}elseif ($age <12){
			echo 'Hello kid';
		}elseif($age >= 12 AND $age < 18 ){
			echo 'Hello Teenager boy';
		}elseif($age >= 18 OR $age <= 115){
			echo 'Hello Man'; 
		}
		else{
			echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?'; 
		}
	
				}
//}*/

?>
<!--

<h3>5. Display a different greeting according to the user's age, gender and mothertongue.</h3>

<p>Improve the previous form to add yet another question: "Do you speak English ? ".</p> <br>
<p>Use an input of type radio to capture the data. Possible answers: "yes" or "no".</P>

<p>Then modify your form processing script to implement this :</p>

    <li>If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.</li>

    <li>If the answer is "no", display "Aloha boy" or "Aloha Girl"</li>
<br>

<form method="get" action="">
<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female
</form>
<form method="get" action="">
	<label for="age">Please enter your age</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>
<p>
<h3>Affichez un message d'accueil différent en fonction de l'âge, du sexe et de la langue maternelle de l'utilisateur.</h3>
<form action="condition.php" method="post">
<p>Parlez-vous anglais ?
    <input type="radio" name="langage" value="oui">Oui
    <input type="radio" name="langage" value="non">non
<p>Votre Sexe:
    <input type="radio" name="genre" value="femme">Femme
    <input type="radio" name="genre" value="homme">Homme
</p>

<p>Votre age: <input type="text" name="age"/> </p>
<p><input type="submit" value="envoyer"></p>
</form>
-->


//<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>
//<p>vous êtes <?php echo  $_POST['genre']  ; ?></p>

<?php 
/*
    if ($_POST["langage"] == "oui"){
        if ($_POST["genre"] == "homme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Wow Mister! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Hello Mister Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Hello Mister Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Hello Mister Kiddo !";
            }
        }
        if ($_POST["genre"] == "femme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Wow Miss! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Hello Miss Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Hello Miss Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Hello Miss Kiddo !";
            }
        }
    }
    if ($_POST["langage"] == "non"){
        if ($_POST["genre"] == "homme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Aloha Wow Mister! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Aloha Mister Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Aloha Mister Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Aloha Mister Kiddo !";
            }
        }
        if ($_POST["genre"] == "femme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Aloha Wow Miss! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Aloha Miss Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Aloha Miss Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Aloha Miss Kiddo !";
            }
        }
    }*/
?>
</p>



<h3>6. The Girl Soccer team</h3>

<quote>You want to create a soccer team for girls between 21 and 40 years old.</quote>

<p>Create a form asking for the age, gender and name of the person.<br>
 Use the $age and $gender variables in an if/else to display a "welcome to the team !" <br>
 or "Sorry you don't fit the criteria" message.</p>

 <form action="" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
 <p><input type="submit" value="OK"></p>
</form>

<?php

if ($_POST["gender"] == "male")
{
	echo "Désolé, vous ne remplissez pas les critères";
}
if ($_POST["gender"] == "female")
{
	if ($_POST["age"]>=21 && $_POST["age"]<=40){
		echo "Bienvenue dans l'équipe<br>";
	}
	else {
		echo "Désolé, vous ne remplissez pas les critères<br>";
	}
}
print_r($_POST);
?>

<h3>7. Achieve the same, without the ELSE.</h3>

<form action="" method="post">
<p>Votre age: <input type="text" name="age"/> </p>
<p>Votre Sexe:
    <input type="radio" name="gender" value="female">Femme
    <input type="radio" name="gender" value="male">Homme
</p>
<p><input type="submit" value="envoyer"></p>
</form>

<?php
    $equip = "Désolé, vous ne remplissez pas les critères";
    if ($_POST["gender"] == "female" && $_POST["age"]>=21 && $_POST["age"]<=40)
    {
        $equip = "Bienvenue dans l'équipe";   

    }
    echo $equip;

?>
<h3>8. "School sucks!" Exercise</h3>

<p>Start a new form that would allow a (nasty) teacher to grade a student.</p>

<p>It would display a different message according to the number annotated :</p><br>

    <li>note below 4 : "This work is really bad. What a dumb kid! "</li>
    <li>note between 5 and 9 : "This is not sufficient. More studying is required."</li>
    <li>note equals 10 : "barely enough!"</li>
    <li>note is 11, 12, 13 or 14 : "Not bad!"</li>
    <li>note is 15, 16, 17 or 18 : "Bravo, bravissimo!"</li>
    <li>note is 19 or 20 : "Too good to be true : confront the cheater!"</li>

	<br>
	<form action="" method="post">
<p>Points <input type="text" name="note"> /20</p>
<p><input type="submit" value="OK"></p>
</form>
<?php
if (isset($_POST["note"])){
	if ( $_POST["note"] <= 4) {

		echo "This work is really bad. What a dumb kid! ";
	}
	else if ($_POST["note"] >=5 AND $_POST["note"]<=9) {

		echo "This is not sufficient. More studying is required.";
	}else if ($_POST["note"] == 10 ) {

		echo "barely enough!";
	}else if ($_POST["note"] == 11 OR $_POST["note"] == 12 OR $_POST["note"] == 13 OR $_POST["note"] == 14) {

		echo  "Not bad!";
	}else if ($_POST["note"] == 15 OR $_POST["note"] == 16 OR $_POST["note"] == 17 OR $_POST["note"] == 18) {

		echo  "Bravo, bravissimo!";
	}else {
		echo "<h4 style=color:red>Too good to be true : confront the <em>cheater!</em></h4>";
	}

}

?>
<h3>9. The "Switch" structure.</h3>
<p> new file switch-structure.php </p>

