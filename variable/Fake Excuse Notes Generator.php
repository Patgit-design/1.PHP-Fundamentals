<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <header>
    <img class = "logo" src="generator.png" alt="logo" /></img>
</header>
<h1>Fake Excuse Notes Generator</h1>
<div class = "formulaire">
    <form method="GET" action="">
        <h3>Please fill out the form and press send to generate your letter</h3>
        <label for="name">Last name and first name of the student: <br> </label>
        <input type="text" name="name"/>
<br>
        <input type="radio" name="gender" value="boy"/>
        <label for="boy">Boy</label>
        <input type="radio" name="gender" value="girl"/>
        <label for="girl">Girl</label>

        <p>Teacher:</p>
        <label for="name">Name of the teacher: </label><br>
        <input type="text" name="teacher"/><br>
        <input type="radio" name="genderTeacher" value="mister" class ="mister"/>
        <label for="mister">Mister</label>
        <input type="radio" name="genderTeacher" value="miss"/>
        <label for="miss">Miss</label>

        <p>Reason for the absence:</p>
        <input type="radio" name="excuse" value="illness"/>
        <label for="illness">Illness</label>
        <input type="radio" name="excuse" value="deathPet"/>
        <label for="deathPet">Death of the pet</label>
        <input type="radio" name="excuse" value="extraActivity"/>
        <label for="extraActivity">Extra-curricular activity</label>
        <input type="radio" name="excuse" value="covid"/>
        <label for="covid">Covid-19</label><br>
        <input type="submit" name="submit" value="Send" class="btn"/>
    </form>
    </div>

    <h2>Your fake excuse note to copy/paste:</h2>
    <div class = "letter">
    


    <?php
        if(isset($_GET['submit'])){
            $name = $_GET['name'];
            $_GET['gender'] == "boy" ? $gender="Il" : $gender="Elle";
            $_GET['genderTeacher'] == "mister" ? $genderTeacher="Monsieur" : $genderTeacher="Madame";
            $teacher = $_GET['teacher'];
            $date = date("d/m/Y");

            echo "<p class = 'date'>Le $date<br></p>";
            echo "<p class = 'entete'>$genderTeacher $teacher,</p>";


            $excuseArray=array(
                "illness" => array(
                    "$name, élève dans votre école, ne pourra pas assister aux cours. $gender vomit toutes les demi heures et ne peut se déplacer sans un seau.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours. $gender a de la fièvre jaune ce matin. $gender reviendra dès qu'elle sera bleue",
                    "$name, élève dans votre école, ne pourra pas assister aux cours. $gender a une toux grasse. $gender crache tout vert. Il est sûrement contagieux !",
                    "$name, élève dans votre école, ne pourra pas assister aux cours. $gender a des démangeaisons à cause de son eczéma. ",
                    "$name, élève dans votre école, ne pourra pas assister aux cours. $gender il a perdu la voix et l'ouïe."),
            
                "deathPet"=> array(
                    "$name, élève dans votre école, ne pourra pas assister aux cours donnés en ce jour. $gender a perdu sa grand-mère et ne s'en remet pas.$gender ne pourra plus manger chez elle le midi !",
                    "$name, élève dans votre école, ne pourra pas assister aux cours donnés en ce jour. $gender a écrasé son pogona et n'est donc pas dans son assiette. Veuillez l'excuser aujourd'hui.",
                    "$name, élève dans votre école, ne pourra pas assister aux cours donnés en ce jour. $gender a mangé le hamster de sa soeur et ne le digère pas ! Veuillez l'excuser aujourd'hui.",
                    "$name, élève dans votre école, ne pourra pas assister aux cours donnés en ce jour. $gender a trouvé un oiseau mort dans le jardin. $gender prend sa journée pour s'inscrire chez Natagora.",
                    "$name, élève dans votre école, ne pourra plus assister aux cours. $gender a été tué par son père à cause de son mauvais bulletin. Nous vous invitons aux obsèques."),
            
                "extraActivity"=> array(
                    "$name, élève dans votre école, ne pourra pas assister aux cours donnés en ce jour.$gender a participé au tournage d'un film d'action.Ca à été éprouvant. Veuillez l'excuser pendant une semaine.",
                    "$name, élève dans votre école, ne pourra pas assister aux cours donnés ces prochaines semaines. $gender a remporté le tournoi de ping-pong et va se rendre aux prochains JO.",
                    "$name, élève dans votre école, ne pourra pas assister aux cours. $gender a été surpris lors d'un cambriolage de voiture. $gender est donc reparti avec la police. Veuillez l'excuser le temps de sa peine",
                    "$name, élève dans votre école, ne pourra pas assister aux cours jusqu'à l'année prochaine. $gender a énormément de répétitions de danse afin de participer au concours d'entrée à l'Opéra de Paris. $gender est stressé !",
                    "$name, élève dans votre école, ne pourra pas assister aux cours. $gender doit se rendre à Chicago pour un concours Fortnite. Suivi d'un challenge entre joueurs de LOL. On vous expliquera !"),
            
                "covid"=>array(
                    "$name, ne pourra pas se rendre aux cours. $gender a peur de contracter la Covid-19. Veuillez l'excuser pendant la pandémie.",
                    "$name, ne pourra pas se rendre aux cours. $gender a contracté la Covid-19. Veuillez l'excuser pendant son écartement social.",
                    "$name, ne pourra pas se rendre aux cours. $gender a peut-être la Covid-19. Veuillez l'excuser pendant sa quarantaine en attendant le test.",
                    "$name, ne pourra pas se rendre aux cours. $gender s'est enfermé dans la cabane du jardin afin d'échapper au coronavirus. Veuillez l'excuser pendant la pandémie.",
                    "$name, ne pourra pas se rendre aux cours. $gender a perdu tout sa famille à cause du coronavirus. Veuillez l'excuser pendant son deuil qui s'annonce interminable.")
            );
           

            function random(){
                return rand(0,4);
            }

            switch ($_GET['excuse']){
                case "illness":
                    echo $excuseArray["illness"][random()];
                    break;
                case "deathPet":
                    echo $excuseArray["deathPet"][random()];
                    break;
                case "extraActivity":
                    echo $excuseArray["extraActivity"][random()];
                    break;
                case "covid":
                    echo $excuseArray["covid"][random()];
                    break;
            }
            echo "<p class = 'salutations'>Cordialement,</p>";
        }
        ?>
    </div>
</body>
</html>