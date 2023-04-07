<?php
include '../Controller/DomaineC.php';
$DomaineC = new DomaineC();

if (isset($_GET['Nom_Domaine']) && !empty($_GET['Nom_Domaine'])) {
    $liste = $DomaineC->showDomaine2($_GET['Nom_Domaine']);
} else {
    $liste = $DomaineC->listDomaines();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="Nom_Domaine" id="Nom_Domaine" placeholder="Enter Nom_Domaine">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of Domaines</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Domaine</th>
            <th>Nom_Domaine</th>
            <th>description_d</th>
       
            
            
  
        </tr>
        <?php
        foreach ($liste as $Domaine) {
        ?>
            <tr>
                <td><?= $Domaine['idDomaine']; ?></td>
                <td><?= $Domaine['Nom_Domaine']; ?></td>
                <td><?= $Domaine['description_d']; ?></td>

                
                
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>