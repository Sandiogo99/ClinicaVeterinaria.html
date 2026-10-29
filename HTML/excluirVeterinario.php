<?php
namespace ClinicaVeterinaria\projeto\HTML;
require_once('../DAO/conexao.php');
require_once('../DAO/excluir.php');


use ClinicaVeterinaria\projeto\DAO\Conexao;
use ClinicaVeterinaria\projeto\DAO\Excluir;

$conexao = new Conexao();
$consultar = new Excluir();
$resultado ="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Veterinario</title>
</head>
<body>
    <h1> Excluir Veterinario</h1>
    <form method="POST">
   <input type= "number" name="codigo" id="codigo" name="codigo"/>
   <button type="submit">Excluir</button>
    <?php
          $codigo = $_POST['codigo'];
          $resultado = $consultar->ExcluirVeterinario($conexao, $codigo);   
          ?>
          <?php echo $resultado;
          ?>
          <a href="../index.php"><button>Voltar</button></a>
    </form>
</body>
</html>