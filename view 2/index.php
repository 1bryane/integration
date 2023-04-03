
<!doctype html>
<html lang="en">

<head>
    <!--
    /   Creart ' com: Free Template by FreeHTML5.co
    /   Author: https://freehtml5.co
    /   Facebook: https://facebook.com/fh5co
    /   Twitter: https://twitter.com/fh5co
    -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="fenetreEv.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
     integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">
    <link href="../View/pubadddesign.css" rel="stylesheet" />





    <title>Creart ' com</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="reclamation.css">

</head>


    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">Creart ' com</h2>
            <nav class="nav nav-fill mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/fh5co" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
                </li>
            </nav>


            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
                <nav class="navbar navbar-expand-md">

                    <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                        <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                    </button>
                    <div id="my-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="acceuil.php">publications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article.html">mon profil</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">ajouter un domaine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TECH</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LIFE</a>
                            </li> -->
                            <li class="nav-item" >
                            <button id="openModalBtn">Ouvrir la fenêtre modale</button >


                                                            <div id="modal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                </div>
                                </div>
                                <script>
                                    var modal = document.getElementById("modal");
                                var btn = document.getElementById("openModalBtn");
                                var span = document.getElementsByClassName("close")[0];

                                btn.onclick = function() {
                                modal.style.display = "block";
                                }

                                span.onclick = function() {
                                modal.style.display = "none";
                                }

                                window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                                }

</script>
                               
                            </script>
                            </li>

                            <li class="nav-item">
                                <form action="" method="POST">
                                    <div class="input-group mt-0 mx-auto" style="width:16px;">

                                        <div class="">
                                            <img src="assets/images/search-icon.png" id="toggle-search"
                                                class="ml-2 toggle-search" alt="search icon">
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row ml-0 mr-0">
 <!-- affichage domaines -->
 <?php
                                                         include '../Controller/DomaineC.php';

                    $DomaineC = new DomaineC();

                    if (isset($_GET['Nom_Domaine']) && !empty($_GET['Nom_Domaine'])) {
                        $liste = $DomaineC->showDomaine2($_GET['Nom_Domaine']);
                    } else {
                        $liste = $DomaineC->listDomaines();
                    }
                    ?>
                    
                    <?php
                foreach ($liste as $Domaine) {
                ?>

            <div class="col-md-3 pr-0 first">
                <div class="card">
                <img class="card-img" src="../storage/images/<?= $Domaine['imageD']; ?>" >
                <div class="card-img-overlay">
                        <h5><?= $Domaine['idDomaine']; ?>⭐<?= $Domaine['Nom_Domaine']; ?></h5>
                    </div>
                </div>
            </div>
        
        <?php
            }
            ?>
            
        </div>

    </header>
    
    <div class="container-fluid video-player">
        <div class="container">
            <!-- <div class="screen embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/2WjmH5Pjvog?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div> -->
            <div>
            <center>
                                <video width="840" height="560" controls>
                                    <source src="../upload/CreAr'Com.mp4" type="video/mp4">
                                  </video></center>
            </div>

           <hr><br>
    <body style="background-color: #aaa;">
    <style>
        body {
  background-image: url('bkg.PNG');
  background-repeat: no-repeat;
  background-size: 1550px 755px;
    background-attachment: fixed;
}
    </style>


            
            <div>
                
                  <!-- add publication -->
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
    isset($_POST["description_p"]) &&
    isset($_POST["domaine_p"])
) {
    if (
        !empty($_POST['Nom_p']) &&
        !empty($_POST["statut"]) &&
        !empty($_POST["description_p"]) &&
        !empty($_POST['domaine_p']) &&
        !empty($_FILES['image']) 
    ) {
        $image = $_FILES['image'];

        $image_path = PubC::upload($image);
        if ($image_path == "Sorry, there was an error uploading your file."){
            $error = "Sorry, there was an error uploading your file.";
        }else {
            $Pub = new Pub(
                null,
                $_POST['Nom_p'],
                $_POST['statut'],
                $_POST['description_p'],
                $_POST['domaine_p'],
                $image_path
            );
            $PubC->addPub($Pub);
        }
    } else
        $error = "Missing information";
}


?>
<table >
    <tr><center>
            <table >
                    <thead>
                        <th style="color: #000;"><center> <h3>ajouter publication</h3> </center></th>
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
                           
                        <label for="Nom_p">Name:</label>
                        <input type="text" name="Nom_p" id="Nom_p" maxlength="20" required="" style="width: 300px;">

                        <label for="description_p">description</label>
                        <input type="text" name="description_p" id="description_p"required="" style="width: 300px;">

                        <!-- <label for="email">domaine</label> -->
                        <!-- <input type="text" name="domaine_p" id="domaine_p" maxlength="20"required="" style="width: 300px;"> -->
                        <!-- <select name="domaine_p" id="domaine_p" class="input" style="width: 300px;" required="doomaiiinesss">
                            <option value="domaines!">domaines</option>
                            <option value="sport">sport</option>
                            <option value="programmation">programmation</option>
                            <option value="cuisine">cuisine</option>

                        </select> -->
                        <label for="domaine_p">domaines :</label>
                        <select name="domaine_p" id="domaine_p" class="input" style="width: 300px;" required="doomaiiinesss">
                        <?php
                            // connecter à la base de données
                            $db = new PDO("mysql:host=localhost;dbname=CAC", "root", '');

                            // récupérer les catégories depuis la base de données
                            $Domaine = $db->query("SELECT * FROM Domaine")->fetchAll(PDO::FETCH_ASSOC);

                            // générer les options pour chaque catégorie attention il donne l id de domaine comme valeur !!!!!
                            foreach ($Domaine as $category) {
                            echo '<option value="' . $category['idDomaine'] . '">' . $category['Nom_Domaine'] . '</option>';
                            }
                        ?>
                        </select>





                        <label for="statut">statut:</label>
                        <textarea type="text" name="statut" id="statut" maxlength="300" required="" style="resize: none;
                        height: 80px;width: 300px;"></textarea>

                        <label for="image" >image</label>
                        <input  type="file" name="image" id="image" required="" >


                        <button type="submit" value="Save" style="width: 300px;">submit</button>
                        <button type="reset" value="Reset" style="width: 300px; background-color: royalblue; color:#fff" >reset</button>
                        </form>
                    </td>
                    <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                    <td>
                    &emsp;&emsp;&emsp;&emsp;      <center><img src="../upload/logo final transparant.png" width="500px" height="500px"></center>
                    </td>
                    <td>
                    <h3>evènement</h3>
                    <?php
                        include '../Controller/eventC.php';
                        $eventC = new eventC();
                        $list = $eventC->listevents();
                        ?>
                        <html>
                        
                        <?php
                        foreach ($list as $event) {
                        ?>
                         <div class="card3">
                        <div class="align">
                            <span class="red"></span>
                            <span class="yellow"></span>
                            <span class="green"></span>
                        </div>

                        <h1><?= $event['Nom_event']; ?></h1>
                        <p>
                        <?= $event['time_e']; ?></p>
                        <p>description:<?= $event['description_e']; ?></p>
                        <p>adresse:<?= $event['address']; ?></p>
                        <p>                    <a href="deleteevent.php?idevent=<?php echo $event['idevent']; ?>">Delete</a>

</p>
                             </div> <br><br><br><br><br><br><br><br><br><br>
                        <?php
                        }
                        ?>
                       
                    </td>
                </tr>
            </tbody>
        </table>
    </tr>




   

                    
        
                   
                    <pre>
                      <code class="language-html">
                        <!-- Insérez votre code HTML ici -->
                      </code>
                    </pre>
                    <pre>
                      <code class="language-javascript">
                        <!-- // Insérez votre code JavaScript ici -->
                      </code>
                    </pre>
                    <pre>
                      <code class="language-css">
                        
                    
                    </code>
                    </pre>
                  </div>
                  <!-- pmf-hgjn-ttz -->
            </div>
            <div class="row vr-gallery">
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="assets/images/gallery-img1.png" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>13/03/2023</small></p>
                            <h3>Définision</h3>
                            <p>
                                La culture est une richesse pour tous. Elle est d’ailleurs ce
                                 qui reste quand tout est perdu. Aussi, il est souvent intéressant de se rendre de 
                                 temps à autre dans les musées. Mais si vous ne pouvez pas le faire, il existe 
                                 aujourd’hui des sites web culturels
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/video-cover1.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=vpO8sZDxOGI"><img
                                    src="assets/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">Weekend In Boston</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4 pr-0 pd-md">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/gallery-img2.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="contact-box">
                                <p><small>13/03/2023</small></p>
                                <h3>Objectif</h3>
                                <p>L'objectif de divertissement culturel est de fournir une forme de divertissement qui est à la 
                                    fois agréable et éducative. Il peut inclure des activités telles que la lecture de livres, la 
                                    visualisation de films, l'écoute de musique, la visite de musées ou d'expositions d'art, la participation 
                                    à des spectacles de théâtre ou de danse, ou la lecture de magazines culturels.
                                    ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/gallery-img3.jpg" alt="">
                        <div class="card-body bg-gray cus-pd2 cus-arrow-up">
                            <p><small>13/03/2023</small></p>
                            <h3>besoin</h3>
                            <p>Le divertissement culturel peut aider à élargir les horizons des individus, à leur faire 
                                découvrir de nouveaux concepts, à leur donner une perspective différente sur le monde, et à 
                                leur permettre de se divertir tout en acquérant de nouvelles connaissances. En outre, le divertissement 
                                culturel peut également aider à promouvoir les arts et la culture, à soutenir les industries créatives et 
                                à favoriser le développement économique local...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="assets/images/gallery-img4.jpg" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>march 27, 2020</small></p>
                            <h3>Conclusion</h3>
                            <p>
                                En somme, le divertissement culturel peut être une forme de divertissement enrichissante qui peut aider les individus à se dive
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/video-cover2.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=vpO8sZDxOGI"><img
                                    src="assets/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">Weekend In Boston</h5>

                        </div>
                    </div>
                </div>

                
            </div>

        </div>
    </div>
<hr>

   <!-- add feedback -->
   <?php
                                include '../Controller/FDC.php';

                                $error = "";
                                
                                // create FD
                                $FD = null;
                                
                                // create an instance of the controller
                                $FDC = new FDC();
                                $list = $FDC->listFDs();

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
                                        
                                    } else
                                        $error = "Missing information";
                                }
                                
                                ?>
                                
                                    <hr>

                                    <div id="error">
                                        <?php echo $error; ?>
                                    </div>

                                    <form action="" method="POST">
                                    <center>
                                <div class="form">
                                    <div class="subtitle"><h2>Ajout FEEDBACK</h2></div>
                                    <div class="input-container ic1">
                                    <!-- <input type="text" name="avis" id="avis" maxlength="200"class="input" placeholder="AVIS"> -->
                                                                <select name="avis" id="avis" class="input" placeholder="AVIS">
                                    <option value="exellent!">exellent</option>
                                    <option value="moyen">moyen</option>
                                    <option value="bas">bas</option>
                                </select>
                                        <div class="cut"></div>
                                        
                                    </div>
                                    <div class="input-container ic2">
                                    <input type="text" name="reclamation" id="reclamation" maxlength="200"class="input" placeholder="Reclamation">
                                        <div class="cut"></div>
                                    </div>
                                    <div class="input-container ic2">
                                    <input type="text" name="proposition" id="proposition" maxlength="200"class="input"  placeholder="proposition">
                                        <div class="cut cut-short"></div>
                                    </div>
                                    <input type="submit" value="Save"class="submit">
                                    </div>
                                    </center>


                                    </form>
                                    

                                <hr>
    </form>
     

    



   
<hr>

   
   
   
    <!-- <div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
        <h2 class="text-center">Stay Updated</h2>
        <p class="text-center mt-2">Sign up for our newsletter to receive the latest news and event postings.</p>
        <div class="input-group mt-4 mx-auto" style="max-width: 640px">
            <input type="email" class="form-control" placeholder="YOUR EMAIL ADDRESS">
            <div class="">
                <button class="btn btn-success ml-2" type="submit">SIGN UP</button>
            </div>
        </div>
    </div> -->

    <footer class="container-fluid pt-5">
        <div class="container">
            <h2 class="logo text-center">Creart ' com</h2>
            <nav class="nav nav-fill mx-auto mt-5">
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
                </li>
            </nav>
        </div>
        <div class="copyright mt-4">
            <p>num:+21650312709</p>
            <p>mail:creartcom01@esprit.tn</p>
            <!-- <p class="text-center">&copy; 2019 <a href="#" class="text-white">Creart ' com</a>. All Rights Reserved. Design
                by <a href="https://freehtml5.co/shahala" target="_blank" class="text-white">FreeHTML5.co</a>.</p> -->
        </div>
    </footer>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.yu2fvl.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>

</html>
<style>

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0, 0, 0, 0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 80%; 
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>