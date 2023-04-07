<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
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
            null,
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
        $clientC->addClient($client);
        header('Location:ListClients.php');
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
    <a href="ListClients.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="firstName">First Name:
                    </label>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Last Name:
                    </label>
                </td>
                <td><input type="text" name="lastName" id="lastName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="addresse">addresse:
                    </label>
                </td>
                <td>
                    <input type="text" name="addresse" id="addresse">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="genre">genre:
                    </label>
                </td>
                <td><input type="text" name="genre" id="genre" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="age">age:
                    </label>
                </td>
                <td><input type="numeros" name="age" id="age" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="passwords">passwords:
                    </label>
                </td>
                <td>
                    <input type="text" name="passwords" id="passwords">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numeros">numeros:
                    </label>
                </td>
                <td>
                    <input type="numeros" name="numeros" id="numeros">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="role">Rôle:
                    </label>
                </td>
                <td>
                    <input type="text" name="role" id="role">
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