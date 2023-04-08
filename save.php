<?php 

$password_repeat = $_POST["password_repeat"];
$password = $_POST["password"];
// verifica se o nome de usuário e a senha estão corretos
if($password_repeat == $password) {
    // define a sessão de login e redireciona para a página principal
    $nome = $_POST["first_name"];
    $sobrenome = $_POST["last_name"];
    $departamento = $_POST["departamentos"];
    $salario = $_POST["salario"];
    $email =  $_POST["email"];
    $senha = md5( $_POST["password"]);
    var_dump($_POST);

    $mysqli = new mysqli("localhost","root", "root","database");
    if($mysqli -> connect_errno){
        echo "erro" . $mysqli -> connec_error;
        exit();

    }
    $sql = "INSERT INTO `empregados`(`nome`,`sobrenome`, `id_departamento`,`salario`,`senha`, `email`) VALUES ('".$nome."','".$sobrenome."','".$departamento."','".$salario."','".$senha."','".$email."')";
    $mysqli -> query($sql);



    exit;
} else {
    Echo "senhas diferentes.";
 
}

?>