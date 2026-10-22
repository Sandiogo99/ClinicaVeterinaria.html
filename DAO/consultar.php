<?php
namespace ClinicaVeterinaria\projeto\DAO;
use ClinicaVeterinaria\projeto\DAO\Conexao;

class Consultar {
    function consultarVeterinario(Conexao $conexao, int $codigo){
        try
        {
            $conn = $conexao->conectar();
            $sql = "select * from Veterinario where codigo = '$codigo'";
            $result =mysqli_query($conn,$sql);

           while($dados =mysqli_fetch_Array($result)){
            if($dados ['codigo'] == $codigo){
                return '<br>Código: '.$dados['codigo'].
                       '<br>Nome: '.$dados['nome'].
                       '<br>Especialidade: '.$dados['especialidade'].
                       '<br>Telfone: '.$dados['telefone'].
                       '<br>Endereco : '.$dados['endereco'].
                       '<br>Salario: '.$dados['salario'];
            }//fim do if
           }//fim do while
        }//fim do try
        catch(Exception $erro)
        {
            return " <br><br> algo deu errado! <br>br> $erro";
        }//fim do catch
    } //fim do metodo
}//fim da classe





?>