<?php
include '../Controller/DomaineC.php';
$DomaineC = new DomaineC();
$list = $DomaineC->listDomaines();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Domaines</h1>
        <h2>
            <a href="addDomaine.php">Add Domaine</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Domaine</th>
            <th>Image</th>
            <th>nom de l'evennement</th>
            <th>description de l'evennement </th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $Domaine) {
        ?>
            <tr>
                <td><?= $Domaine['idDomaine']; ?></td>
                <td><img src="../storage/images/<?= $Domaine['imageD']; ?>" width="100px" height="100px"></td>
                <td><?= $Domaine['Nom_Domaine']; ?></td>
                <td><?= $Domaine['description_d']; ?></td>
                <td align="center">
                    <form method="POST" action="updateDomaine.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Domaine['idDomaine']; ?> name="idDomaine">
                    </form>
                </td>
                <td>
                    <a href="deleteDomaine.php?idDomaine=<?php echo $Domaine['idDomaine']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>