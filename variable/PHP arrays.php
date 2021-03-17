<h3>
    Create an array representing your family members<br>
    Display its content using the print_r function<br>
    Then, create an array describing your favourite recipes<br>
    Display its content using the print_r<br>
    Then, create an array listing your favourite films<br>
    Then, using that array, display only the one film you like best using its index<br>
</h3>
<?php

$family = array('Gael', 'Patricia', 'Elwin', 'Elise');
print_r($family);

$recipes = array('Sole meunière', 'Pot-au-feu', 'carbonnades flamandes');
print_r($recipes);

$films = array('Lord of the rings', 'Alien', 'Schindler List', 'Star Wars');
print $films[1];

var_dump($family);


$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person[2] = 'Brussels';

// compare this
echo $person[1];
// with this
//echo $person['street']; //return undefined index

//Coding an Associative Array

//It's pretty much the same as for 'normal' arrays, except that you specify a label in front of each information.

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );

    echo $user['lastname'];
    ?>
    <h3>Describe yourself using an associative array: $me. <br>
    Specify your age, your favourite season of the year, wether you like soccer or not (boolean).<br>
     Try to use the right variable type for each value.</h3>

     <?php
    $me = array(
        'age'	=> 45 , 
        'firstname' 		=> 'Patricia' ,
        'lastname' 	  		=> 'Corduant' ,
        'hobbies' 	=> array('Music', 'Theater', 'Painting'),
        'mother' =>array('Chantal', 'decedee', 'she was blond'),
      
    );
    $me  ['mother'] ['hobbies'] = ['cooking','driving','travels'];

     echo '<pre>';
print_r($me);
echo '</pre>';

?>
<h3>Count the number of elements</h3>

<p>Say you want to know how many hobbies your mother has. <br>
Try to guess the native php function that allows you to count the number of elements in an array.<br>
Below, count your own hobbies<br>
Below, add both totals and display the total amount of hobbies.</p>
<?php
$motherHobbies = count($me ['mother'] ['hobbies']);
$meHobbies = sizeof($me['hobbies']); //sizeof alias de count

echo '<pre>';
print_r($motherHobbies);
echo '</pre>';

echo '<pre>';
print_r($meHobbies);
echo '</pre>';

echo $motherHobbies+$meHobbies;
?>

<h3>Add an element in a multi-dimensional array</h3>
    <p>A friend introduced you to the joys of Taxidermy : it quickly becomes your new hobby.<br>
 Try to find the right way to add that new hobby to your array's 'hobbies' key.</p>


    <?php
    $me ['hobbies'] [] = 'Taxidermie';

    print_r ($me['hobbies']);
    ?>

<h3>Replace</h3>

<p>You decide you need a reset and change your last name to Durand. How would you update your array ?</p>

<?php

$me ['lastname'] = 'Durant';
print_r ($me);
?>

<h3>Create a new array from 2 others (or more)</h3>

<p>One day, you meet your $soulmate. Describe your soulmate as an array, with the same keys as yours.</p><br>

<p>Now, I wonder ... What are the potential hobbies your child could have ?<br>
 It turns out there was a documentary on TV the other day, in which an expert in Genetics explained 2 possible scenarios<br>
  that could answer that question :<br>

   <li> either intersection (only the hobbies common to both arrays)</li>
    <li>or a fusion (all the hobbies of each array together)</li>

<p>Try to guess the name of the 2 PHP functions that can make these two operations<br>
 and look it up in the online PHP Manual. (Tip: both start with array_). <br>
 Test their syntax and try to answer the question.</p>
<?php
// $me = array(...);

$soulmate = array(
    'age'	=> 45 , 
    'firstname' 		=> 'Gael' ,
    'lastname' 	  		=> 'Masson' ,
    'hobbies' 	=> array('Music', 'Technology', 'Painting'));

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me ['hobbies'],$soulmate ['hobbies']);
$possible_hobbies_via_merge =  array_merge ($me ['hobbies'],$soulmate ['hobbies']);
echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>
<h3>More array exercises</h3>

<p>Let's get more fluent in array manipulation : add, delete and replace elements.<br>

For each of these exercises, use print_r()or var_dump() to check if the result corresponds to the specifications.</p>

   <li> Create an array $web_development containing a 'frontend' and a 'backend' key. Assign an empty array to each key.</li>
    <li>Then, add a line underneath that pushes 'xhtml' in the right array.</li>
    <li>Then, add a line underneath that pushes 'Ruby on Rails' in the right array.</li>
    <li>Then, add a line underneath that pushes 'CSS' in the right array.</li>
    <li> Then, add a line underneath that pushes 'Flash' in the right array.</li>
    <li> Then, add a line underneath that pushes 'JavaScript' in the right array.</li>
    <li>Then, add a line underneath that replace 'xhtml' by 'html'.</li>
    <li> Then, add a line underneath that removes 'Flash' from the array.</li>



    <?php
    $web_development = array(
        'frontend' => [],
        'backend' => []
    );
    array_push($web_development['frontend'],'xhtml');
    array_push($web_development ['backend'],'Ruby On Rails');
    array_push($web_development ['frontend'],'Css');
    array_push($web_development ['backend'],'Flash');
    array_push($web_development ['frontend'],'Javascript');
    $index=array_search('xhtml',$web_development['frontend']);
    $web_development['frontend'][$index]='html';
    $index=array_search('flash',$web_development['backend']);
    array_splice($web_development['backend'], $index, 1);
    echo '<pre>';
print_r($web_development);
echo '</pre>';
