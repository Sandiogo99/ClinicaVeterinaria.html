<?php  
   namespace ClinicaVeterinaria\projeto\DAO;

   class conexao {
    function conectar(){
      try{
     $conn = mysql_connect('localhost','root','', 'ClinicaVeterinaria');
     if($conn){
        return $conn;
        echo "conctado!";
     }else{
        echo "conexão Falhou!";
        
     }

      }
catch(expection $erro)
{
echo "algo deu errado " + $erro;
}  
}
}







?>

