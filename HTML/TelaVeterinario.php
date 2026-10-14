<?php 
    namespace ClinicaVeterinaria\projeto\html;
    require_once('../PHP/veterinaria.php');
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
    <input type="number" id="codigo" name="codigo"/><br></br>

    <label>Nome:</label>
    <input type="Text" id="codigo" name="nome"/><br></br>

    <label>Especialidade:</label>
    <input type="Text" id="codigo" name="especialidade"/><br></br>

    <label>Salario:</label>
    <input type="Text" id="codigo" name="salario"/><br></br>

    <label>Telefone:</label>
    <input type="text" id="codigo" name="telefone"/><br></br>

    <label>Ender:</label>
    <input type="text" id="codigo" name="endereco"/><br></br> 

     <button type="submit">Cadastrar
    <?php  
      if(isset($_POST['codigo'])){
        $codigo         = $_POST['codigo'];
        $nome           = $_POST['nome'];
        $telefone       = $_POST['telefone'];
        $endereco       = $_POST['endereco'];
        $salario        = $_POST['salario'];
        $especialidade  = $_POST['especialidade'];
        $vet = new Veterinario($codigo, $nome, $especialidade, $salario, $endereco , $telefone);
         $logico = true;
      }else{
        $logico = false;
      }
     ?>    
    </button>
    <button><a href="#">Voltar</a></button>
          
   
</Form>
 <div>
       <?php 
       if($logico ==true ){

            echo $vet->imprimir();
       }else{
         echo "preencha os campos";
       }
        ?>
    </div>
</body>
</html>