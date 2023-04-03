<?php
session_start();

// destroi a sessão de login e redireciona para a página de login
session_destroy();
header("Location: index.php");
exit;
?>
