<?php
namespace ClinicaVeterinaria\projeto\DAO;
use ClinicaVeterinaria\projeto\DAO\Conexao;

Class Atualizar{
    function atualizar(Conexao $conexao, 
                        int $codigo,
                        string $campo,
                        string $novoDado)
    {
        try{
            $conn->conectar();//abrir a conexão com BD
            $sql = "update veterinario set $campo = '$novoDado' where codigo = $codigo'";
            $result = mysqli_query($conn,$aql);
            if($result){
                return "<br><br>Dado Atualizado com sucesso!";
            }
      
        }
    } catch(Expection $erro){
        return"<br><br>Algo deu errado<br><br> $erro";
    }                       
}// fim classe 




?>