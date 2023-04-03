    <!-- add domaine -->
    <?php


$error = "";

// create Domaine
$Domaine = null;

// create an instance of the controller
$DomaineC = new DomaineC();
if (
    isset($_POST["Nom_Domaine"]) &&
    isset($_POST["description_d"]) 
)  {
    if (
        !empty($_POST['Nom_Domaine']) &&
        !empty($_POST["description_d"]) &&
        !empty($_FILES['imageD']) 
    ) {
        $imageD = $_FILES['imageD'];

        $imageD_path = DomaineC::upload($imageD);
        if ($imageD_path == "Sorry, there was an error uploading your file."){
            $error = "Sorry, there was an error uploading your file.";
        }else {
            $Domaine = new Domaine(
                null,
                $_POST['Nom_Domaine'],
                $_POST['description_d'],

                $imageD_path
            );
            $DomaineC->addDomaine($Domaine);

        }
    } else
        $error = "Missing information";
}


?>
<table >
<tr><center>
<table >

    <thead>
        <th style="color: #fff;"><center> <h1>ajouter Domaine </h1></center></th>
        <th>&emsp;&emsp;&emsp;&emsp;</th>
        <th> CreArt'Com </th>
    </thead>
    <tbody>
<tr>
    <td>

                    <div id="error">
                    <?php echo $error; ?>
                    </div>





               
        <div class="contact-form" style="width: 400px;">
        <form action="" method="POST"  enctype="multipart/form-data" > 
           
        <label for="Nom_Domaine">nom domaine:</label>
        <input type="text" name="Nom_Domaine" id="Nom_Domaine" maxlength="20" required="" style="width: 300px;">

        <label for="description_d">description description</label>
        <input type="text" name="description_d" id="description_d"required="" style="width: 300px;">

      

        <label for="imageD">image descriptif</label>
        <input type="file" name="imageD" id="imageD" required="">


        <button type="submit" value="Save" style="width: 300px;">submit</button>
        <button type="reset" value="Reset" style="width: 300px; background-color: royalblue; color:#fff;" >reset</button>
        </form>
    </td>
    <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td>
    &emsp;&emsp;&emsp;&emsp;     
     <center><img src="../upload/logo final transparant.png" width="500px" height="500px"></center>

  
    </td>
</tr>
</tbody>
</table>
