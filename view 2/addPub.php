<?php

include '../Controller/PubC.php';

$error = "";

// create Pub
$Pub = null;

// create an instance of the controller
$PubC = new PubC();
if (
    isset($_POST["Nom_p"]) &&
    isset($_POST["statut"]) &&
    isset($_POST["description"]) 
    
) {
    if (
        !empty($_POST['Nom_p']) &&
        !empty($_POST["statut"]) &&
        !empty($_POST["description"]) 
       
    ) {
        $Pub = new Pub(
            null,
            $_POST['Nom_p'],
            $_POST['statut'],
            $_POST['description']
           
        );
        $PubC->addPub($Pub);
        header('Location:ListPubs.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <a href="ListPubs.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="Nom_p">nom pub:
                    </label>
                </td>
                <td><input type="text" name="Nom_p" id="Nom_p" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="statut">statut:
                    </label>
                </td>
                <td><input type="text" name="statut" id="statut" maxlength="200"></td>
            </tr>
            <tr>
                <td>
                    <label for="description">description:
                    </label>
                </td>
                <td>
                    <input type="text" name="description" id="description">
                </td>
            </tr>
           
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>