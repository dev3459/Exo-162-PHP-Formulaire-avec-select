<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec select</title>
</head>
<body>
    <div id="container">
        <div id="get">
            <form action="./user.php" method="GET">
                <label for="lastName">Nom :</label>
                <input type="text" id="lastName" name="lastName" minlength="3" required>
                <label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="firstName" minlength="3" required>
                <input type="submit" value="Valider">
            </form>
        </div>
        <div id="post">
            <form action="./user.php" method="POST">
                <label for="lastName2">Nom :</label>
                <input type="text" id="lastName2" name="lastName2" minlength="3" required>
                <label for="firstName2">Prénom :</label>
                <input type="text" id="firstName2" name="firstName2" minlength="3" required>
                <input type="submit" value="Valider">
            </form>
        </div>
<?php
    if(!empty($_POST['submitSelect'])){
        echo strip_tags(isset($_POST['user-gender'])) ? $_POST['user-gender'] : null;
        echo " ";
        echo strip_tags(isset($_POST['lastNameSelect'])) ? $_POST['lastNameSelect'] : null;
        echo " ";
        echo strip_tags(isset($_POST['firstNameSelect'])) ? $_POST['firstNameSelect'] : null;
        echo "<br>";

        $allowedMimeTypes = ['application/pdf'];
        if(in_array($_FILES['file']['type'], $allowedMimeTypes)){
            echo strip_tags(isset($_FILES['file'])) ? $_FILES['file']["name"] : null;
        }else{
            echo "Merci de joindre un fichier de type pdf uniquement !";
        }


    }else{?>
        <div id="postSelect">
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="gender">Civilité :</label>
                <select name="user-gender" id="gender">
                    <option value="Mr.">Mr.</option>
                    <option value="Mme.">Mme.</option>
                </select>
                <label for="lastNameSelect">Nom :</label>
                <input type="text" id="lastNameSelect" name="lastNameSelect" minlength="3" required>
                <label for="firstNameSelect">Prénom :</label>
                <input type="text" id="firstNameSelect" name="firstNameSelect" minlength="3" required>
                <input type="file" id="file" name="file">
                <input type="submit" name="submitSelect" value="Valider">
            </form>
        </div><?php 
    } ?> 
    </div>
</body>
</html>