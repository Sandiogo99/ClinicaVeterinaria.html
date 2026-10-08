<?php 
namespace ClinicaVeterinaria\projeto\html;
 require_once('../PHP/veterinario.php');
 use ClinicaVeterinaria\projeto\php\Veterinario;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Veterinario</title>
</head>
<body>
    <form method="POST">
    <label>Codigo:</label>
    <imput type="number" id="codigo" name="codigo"/><br></br>

    <label>Nome:</label>
    <imput type="Text" id="codigo" name="name"/><br></br>

    <label>Especialidade:</label>
    <imput type="Text" id="codigo" name="Especialidade"/><br></br>

    <label>Salario:</label>
    <imput type="Text" id="codigo" name="Salario"/><br></br>

    <label>Telefone:</label>
    <imput type="text" id="codigo" name="Telefone"/><br></br>

    <label>Ender:</label>
    <imput type="text" id="codigo" name="Endereco"/><br></br>


</Form>
</body>
</html>