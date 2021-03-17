<form action="" method="post">
<p>Are you a human ? a cat ? or a unicorn ? <br><input type="text" name="status"></p>
<p><input type="submit" value="OK"></p>
</form>
<?php


if (isset(($_POST['status'])))  {
    $cat = ($_POST["status"] == "cat") ? print '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' : false;
    $unicorn = ($_POST["status"] == "unicorn")?  print '<iframe src="https://giphy.com/embed/26vUw5sYGcqmMDoBy" width="480" height="346" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' :  false;
    $human = ($_POST["status"] == "human")? print ' <iframe src="https://giphy.com/embed/3o7bu1QBfylzi8MmYw" width="480" height="347" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' : false;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
//$human = 'human';
//$cat = 'cat';
//$unicorn = 'unicorn';

//$status =isset(($_POST['status']));
if (isset(($_POST['status']))) {
   if ($_POST['status'] == $cat) {
    print '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>'; 
   }elseif ( $_POST['status'] == $unicorn) {
    print '<iframe src="https://giphy.com/embed/26vUw5sYGcqmMDoBy" width="480" height="346" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
   }
   elseif ($_POST['status'] == $human) {
    print ' <iframe src="https://giphy.com/embed/3o7bu1QBfylzi8MmYw" width="480" height="347" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
   }
   else {
       print 'You are undefined';
   }
}*/

/////////////////////////////////////////////////////////////////


//if( isset($status )){
/*
$status == $human?  print $human : null;
$status == $cat?  print $cat : null;
$status == $unicorn?  print $unicorn : null;
  
//}
*/
/*
 ($status === $human) ? print $human
:(($status === $cat) ? print $cat :  print $unicorn);
 */


//echo($num==7)? "the number is exactly seven" : (($num <7)? "the number is less than seven" : "the number is more than seven");

?>

