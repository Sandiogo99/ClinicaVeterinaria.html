<?php
namespace ClinicaVeterinaria\projeto\DAO;
use ClinicaVeterinaria\projeto\DAO\Conexao;

Class Excluir{
    function ExcluirVeterinario(Conexao $conexao, int $codigo){

    try{
        $conn = $conecao->Conectar();
        $sql  = "delete from veterinario where codigo = '$codigo'";
        $result = mysqli_query($conn, $sql);
        if($result){
            return "<br><br> Excluido com sucesso!";

        }
        return"<br><br>NÂo Excluido!";
    
    } catch(Expection $erro){
        return "Algo deu Errado ! <br><br> $erro" ;

    }
    }



?>
