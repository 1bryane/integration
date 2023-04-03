<?php
include '../Controller/ClientC.php';
$ClientC = new ClientC();

if (isset($_GET['firstName']) && !empty($_GET['firstName'])) {
    $liste = $ClientC->showClient2($_GET['firstName']);
} else {
    $liste = $ClientC->listClients();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="firstName" id="firstName" placeholder="Enter firstName">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of Clients</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Client</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>addresse</th>
            <th>dob</th>
            <th>genre</th>
            <th>age</th>
            <th>passwords</th>
            <th>numeros</th>
            <th>role</th>
            

            <th>dob</th>
            <th>image</th>



  
        </tr>
        <?php
        foreach ($liste as $Client) {
        ?>
            <tr>
                <td><?= $Client['idClient']; ?></td>
                <td><?= $Client['firstName']; ?></td>
                <td><?= $Client['lastName']; ?></td>
                <td><?= $Client['addresse']; ?></td>
                <td><?= $Client['dob']; ?></td>
                <td><?= $Client['genre']; ?></td>
                <td><?= $Client['age']; ?></td>
                <td><?= $Client['passwords']; ?></td>
                <td><?= $Client['numeros']; ?></td>
                <td><?= $Client['role']; ?></td>
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Client['idClient']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?php echo $Client['idClient']; ?>">Delete</a>
                </td>
            </tr>
                
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>