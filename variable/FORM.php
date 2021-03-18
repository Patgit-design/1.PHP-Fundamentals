<form action="" method="post">
    <div>
        <label for="name">What's your name :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="age">How old are you ?</label>
        <input type="number" id="age" name="user_age">
    </div>
    <div>
    <p>Do you prefer ?</p>
        <input type="radio" id="andy" name="artist" value="andy">
        <label for="andy">Andy Warhol</label><br>
        <input type="radio" id="marilyn" name="artist" value="marilyn">
        <label for="marilyn">Marilyn Monroe</label><br>
    <div>
        <textarea rows = "5" cols = "60"  id="msg" name="user_message">
            Tell us about your life
         </textarea><br>
         <input type = "submit" value = "submit" />

       
    </div>
</form>
<?php

$userName = $_POST["user_name"];
$age = $_POST["user_age"];
$artist = $_POST["artist"];
$reponse = $_POST["user_message"];


if(isset($_POST['submit'])){

    echo "<pre>";
print_r($_POST);
echo $_POST;

}
echo "<pre>";
print_r($_POST);






?>

