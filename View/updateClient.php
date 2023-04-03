<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["idClient"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["addresse"]) &&
    isset($_POST["dob"])&&
    isset($_POST["genre"]) &&
    isset($_POST["age"]) &&
    isset($_POST["passwords"]) &&
    isset($_POST["numeros"])&&
    isset($_POST["role"])
) {
    if (
        !empty($_POST["idClient"]) &&
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["addresse"]) &&
        !empty($_POST["dob"])&&
        !empty($_POST['genre']) &&
        !empty($_POST["age"]) &&
        !empty($_POST["passwords"]) &&
        !empty($_POST["numeros"])&&
        !empty($_POST["role"])
    ) {
        $client = new Client(
            $_POST['idClient'],
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['addresse'],
            new DateTime($_POST['dob']),
            $_POST['genre'],
            $_POST['age'],
            $_POST['passwords'],
            $_POST['numeros'],
            $_POST['role']
        );
        $clientC->updateClient($client, $_POST["idClient"]);
        header('Location:utilisateur.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">

</head>

<body style="background-color: #2c3845;">
    <button style="background-color: darkcyan;"><a href="utilisateur.php" >Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idClient'])) {
        $client = $clientC->showClient($_POST['idClient']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idClient" style="color:red;">Id Client:
                        </label>
                    </td>
                    <td><input type="text" name="idClient" id="idClient" value="<?php echo $client['idClient']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="firstName"style="color:red;">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" value="<?php echo $client['firstName']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName"style="color:red;">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastName" id="lastName" value="<?php echo $client['lastName']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="addresse"style="color:red;">addresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="addresse" value="<?php echo $client['addresse']; ?>" id="addresse">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob"style="color:red;">Date of Birth:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob" value="<?php echo $client['dob']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="genre"style="color:red;">Genre:
                        </label>
                    </td>
                    <td><input type="text" name="genre" id="genre" value="<?php echo $client['genre']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="age"style="color:red;">Age:
                        </label>
                    </td>
                    <td><input type="text" name="age" id="age" value="<?php echo $client['age']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="passwords"style="color:red;">Mot de Passe:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="passwords" value="<?php echo $client['passwords']; ?>" id="passwords">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numeros"style="color:red;">Numeros:
                        </label>
                    </td>
                    <td>
                        <input type="numeros" name="numeros" id="numeros" value="<?php echo $client['numeros']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="role"style="color:red;">Role:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="role" value="<?php echo $client['role']; ?>" id="role">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                       &emsp;&emsp;&emsp;<input type="reset" value="Reset">
                    </td>
                  
                </tr>
            </table>
        </form>
        <br>
        <center><img src="../upload/logo final transparant.png" width="300px" height="300px"></center>

    <?php
    }
    ?>
</body>

</html>