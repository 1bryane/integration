<?php

include '../Controller/FDC.php';

$error = "";

// create FD
$FD = null;

// create an instance of the controller
$FDC = new FDC();
if (
    isset($_POST["proposition"]) &&
    isset($_POST["reclamation"]) &&
    isset($_POST["avis"]) 
    
) {
    if (
        !empty($_POST['proposition']) &&
        !empty($_POST["reclamation"]) &&
        !empty($_POST["avis"]) 
        
    ) {
        $FD = new FD(
            null,
            $_POST['proposition'],
            $_POST['reclamation'],
            $_POST['avis']
           
        );
        $FDC->addFD($FD);
        header('Location:ListFDs.php');
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
    <a href="ListFDs.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="proposition">reclamation:
                    </label>
                </td>
                <td><input type="text" name="proposition" id="proposition" maxlength="200"></td>
            </tr>
            <tr>
                <td>
                    <label for="reclamation">proposition:
                    </label>
                </td>
                <td><input type="text" name="reclamation" id="reclamation" maxlength="200"></td>
            </tr>
            <tr>
                <td>
                    <label for="avis">avis:
                    </label>
                </td>
                <td>
                    <input type="text" name="avis" id="avis">
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