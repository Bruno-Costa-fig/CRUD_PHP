<?php
session_start();
if (empty($_POST) or empty($_POST["usuario"]) or empty($_POST["senha"])) {
  print "<script>location.href='login.php'</script>";
}

include("./config.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE email='{$usuario}'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if ($qtd > 0 and password_verify($senha, $row->senha)) {
  $_SESSION["usuario"] = $row->email;
  $_SESSION["nome"] = $row->nome;
  print "<script>location.href='index.php'</script>";
} else {
  print "<script>alert('Usuário e/ou senha incorretos!')</script>";
  print "<script>location.href='login.php'</script>";
}
