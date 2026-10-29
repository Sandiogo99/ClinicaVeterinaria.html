<?php 
    namespace ClinicaVeterinaria\projeto\html;
    require_once('../PHP/veterinaria.php');
    require_once('../DAO/conexao.php');
    require_once('../DAO/inserir.php');
    use ClinicaVeterinaria\projeto\php\Veterinario;
    use ClinicaVeterinaria\projeto\DAO\conexao;
    use ClinicaVeterinaria\projeto\DAO\inserir;


    $conexao = new Conexao();
    $inserir = new Inserir();
    $mensagem =""; // retornar o resultado do cadastro 

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

    <label>Nome:</label>
    <input type="Text" id="codigo" name="nome"/><br></br>

    <label>Especialidade:</label>
    <input type="Text" id="codigo" name="especialidade"/><br></br>

    <label>Salario:</label>
    <input type="Text" id="codigo" name="salario"/><br></br>

    <label>Telefone:</label>
    <input type="text" id="codigo" name="telefone"/><br></br>

    <label>Endereço:</label>
    <input type="text" id="codigo" name="endereco"/><br></br> 

     <button type="submit">Cadastrar
    <?php  
      if(isset($_POST['nome'])){
        $nome           = $_POST['nome'];
        $telefone       = $_POST['telefone'];
        $endereco       = $_POST['endereco'];
        $salario        = $_POST['salario'];
        $especialidade  = $_POST['especialidade'];
       
        $mensagem = $inserir->cadastrarVeterinario($conexao,
                                                    $nome,
                                                    $telefone,
                                                    $endereco,
                                                    $salario,
                                                    $especialidade);
      
      }
     ?>    
    </button>
    <button><a href="../index.php">Voltar</a></button>
          
   
</Form>
 <div>
       <?php 
       if(isset($_POST['nome'])){

            echo $mensagem;
       }else{
         echo "preencha os campos";
       }
        ?>
    </div>
</body>
</html>