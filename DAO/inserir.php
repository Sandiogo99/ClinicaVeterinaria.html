<?php
    namespace ClinicaVeterinaria\projeto\DAO;
    use ClinicaVeterinaria\projeto\DAO\Conexao;

    class Inserir{
        public function cadastrarVeterinario(Conexao $conexao,
                                       string $nome,
                                       string $telefone,
                                       string $endereco,
                                       float $salario,
                                       string $especialidade)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into veterinario(codigo,nome,especialidade,salario,endereco,telefone) values('','$nome','$especialidade','$salario','$endereco','$telefone')";
                $result =mysqli_query($conn,$sql);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>nao inserido!";
            }catch (Exception $erro){
                return " <br><br> Impossivel cadastrar cliente <br><br> $erro";
            }
        }//fim do método

    }//fim da classe
?>





?>