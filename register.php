<?php 

$mysqli = new mysqli("localhost","root", "root","database");
if($mysqli -> connect_errno){
    echo "erro" . $mysqli -> connec_error;
    exit();

}
$sql = "SELECT * FROM `departamentos`";
$opcao = $mysqli -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Crie sua conta!</h4>
                            </div>
                            <form action="save.php" method="POST" class="user">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="first_name" placeholder="Primeiro Nome" name="first_name"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="last_name" placeholder="Ultimo Nome" name="last_name"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Endereço de Email" name="email"></div>
                                <div class="mb-3">
                                <select id="departamentos" name="departamentos" class="form-control form-control-user">
                                    <option hidden value="">Departamentos</option>

                                    <?php 
                                        
                                        while($linha = $opcao -> fetch_assoc()){
                                   
                                    ?>
                                    <option value="<?= $linha['id'] ?>"><?= $linha['nome'] ?></option> 
                                     <?php } ?>
                
                                </select>
                                </div>                                          
                                <div class="mb-3">
                                    <input type="text" id="salario" name="salario" placeholder="Salário" class="form-control form-control-user">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password" placeholder="Senha" name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="password_repeat" placeholder="Repita a Senha" name="password_repeat"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Criar conta</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>