<?php
namespace ClinicaVeterinaria\projeto\HTML;
require_once('../DAO/conexao.php');
require_once('../DAO/atualizar.php');

use ClinicaVeterinaria\projeto\DAO\Conexao;
use ClinicaVeterinaria\projeto\DAO\Atualizar;

$conexao = new Conexao();
$consultar = new Atualizar();
$resultado ="";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Veterinario</title>
</head>
<body>
    <h1> Atualizar Cliente </h1>
    <form method="POST">
        <label>Codigo<label>
            <imput>Escolha o campo que deseja atualizar</label>
            <selet name="campo" id="codigo">
            <option value="nome">Nome </option>
            <option Valeu="telefone">Telefone</option>
            <option valeu="especialidade">Especialidade</option>
            <option valeu="endereco">Endereco</option>
            <option Valeu="salario">Salario</option>
            </select><br><br>

            <label>Informe o novo dado: </label>
            <input type="text" name="novoDado" id="novoDado" />

            <button type="submit">Atualizar
                <?php
                $codigo = $_POST['codigo'];
                $campo =$_POST['campo'];
                $novoDado =$_POST['novoDado'];
                
                $resultado = $atualizar->atualizar($conexao, $codigo, $campo ,$novoDado);
                ?>
                </buttom>
</form>
<?php
 echo $resultado;

?>
   <a href="../index.php"><buttom>Voltar</botton></a> 

</body>
</html>
