<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">

        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <style> body {
  background-image: url('bkg.PNG');
  background-repeat: no-repeat;
  background-size: 1550px 750px;

}</style>
   
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                      <a href="utilisateur.php">Back to list </a>
    
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    
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
                                                            header('Location:utilisateur.php');
                                                        } else
                                                            $error = "Missing information";
                                                    }


                                                    ?>
                                        <form action="" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="firstName" id="firstName" maxlength="20"placeholder="Enter your first name" />
                                                        <label for="firstName">First name</label>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" type="text" name="lastName" id="lastName" maxlength="20" placeholder="Enter your last name" />
                                                        <label for="lastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="addresse" id="addresse" placeholder="Enter your adress" />
                                                        <label for="addresse">Adresse</label>
                                                    </div>
                                                </div>
                                                <!-- ---- -->
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" type="date" name="dob" id="dob" placeholder="Enter your dob" />
                                                        <label for="dob">date de naissance</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="numeros" type="numeros" name="numeros" placeholder="Enter your numeros" />
                                                        <label for="numeros">numero</label>
                                                    </div>
                                                </div>
                                                <!-- ---- -->
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" type="text" name="genre" id="genre" maxlength="20" placeholder="Enter your last genre" />
                                                        <label for="genre">genre</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="numeros" name="age" id="age" maxlength="20"  placeholder="age" />
                                                <label for="age">age</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="password" name="passwords" id="passwords placeholder="  />
                                                        <label for="passwords">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="role" id="role" placeholder="Confirm passwords" />
                                                        <label for="role">role</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="mt-4 mb-0">
                                                
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html" type="submit" value="Save">Creat account</a></div>
                                            </div> -->
                                            <div class="mt-4 mb-0">
                                            <input type="submit" value="Save">                                                
                                                <!-- <div class="d-grid"> <input type="submit" value="Save" class="btn btn-primary btn-block" href="login.html">Creat account</a></div> -->
                                            </div>
                                            <div class="mt-4 mb-0">
                                                
                                                <div class="d-grid"><a  href="login.html" type="reset" value="Reset">Reset</a></div>
                                            </div>
                                        </form>
                                    </div>
                            
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
              
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
