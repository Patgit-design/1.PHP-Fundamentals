<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach($pronouns as $pronoun){
    if ($pronoun == "He/She") {
        echo "$pronoun codes<br/>";
    } else {
        echo "$pronoun code<br/>";
    }
    //OR TERNARY:
    //$verb=($pronoun=="He/She") ? "codes" : "code";
    //echo "$pronoun $verb <br/>";
}
//////////////////////////////////////////////////////////////
?>
<h3>You can also loop inside a string</h3>

<h4>While loop</h4>

<?php

$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}
?>
<h3>For loop</h3>

<h4>Here is a third looping structure: the For loop. Check this out :</h4>

<?php
for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
{
    echo $amount_of_lines .  ". : I shall not watch flies fly when I'm learning PHP.<br />";
  
}
?>

<h3>Write a script that prints the numbers from 1 to 120 using  while </h3>

<?php
$numbers = 1;
while ($numbers <= 120)
{
    echo "Number: $numbers . <br/>";
    $numbers ++; 

}

?>
<h3>Write a script that prints the numbers from 1 to 120 using  for </h3>
<?php
for ($i=0; $i <=120 ; $i++) { 
    echo "Number: $i . <br/>";
}

?>
<h3>Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.</h3>

<?php

$members = array( 'Jean', 'Stéphane', 'Arielle', 'Max', 'Mohamed', 'Bruce');
$length = count($members);
for($i=0;$i<$length;$i++){
    echo $members[$i];
}

?>

<h3>Create an array containing at least 10 countries. </h3>
<p>Then, generate the html that will render a select box inside an html form (see mockup below).<br>
 Of course, a loop will be useful...</p>
</body>

<div class="custom-select" style="width:300px;">
  <select name="country" size="10">
  <option value="0">Select land:</option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
  

<?php

$lands = array ('Belgium', 'Italy', 'Spain', 'Denmark', 'Sweden', 'Switzerland', 'Great-Britain', 'Netherlands', 'Germany', 'Bosnia');
foreach($lands as $key => $value):
    echo "<option value='$key'>$value</option>";
endforeach;
?>
</select>
</div>

<h3>Now, edit your array so that it becomes an associative array: use the country ISO code as array key, and the country name as value</h3>
<p>Now, adapt your html select box so that the country ISO code becomes the option element value, and the country name be the visible part of the option.</p>


<?php
$codesIso = ["BE","FR","A","P","AU","PO","CR","N","E","I"];

$landsIso = array_combine($codesIso, $lands);

echo '<select id="country">';
    foreach ($landsIso as $key => $countryIso ){
        echo '<option value="'.$key.'">'.$countryIso.'</option>';
    }
echo '</select>';
?>
