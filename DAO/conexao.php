<?php  
   namespace ClinicaVeterinaria\projeto\DAO;

   class Conexao{
      function conectar(){
         try{
            $conn = mysqli_connect('localhost','root','', 'clinicaVeterinaria');
            if($conn){
               return $conn;
               echo "Conectado!";
            }else{
               echo "conexão Falhou!";
        
            }
         }
         catch(Expection $erro)
         {
            echo "algo deu errado " + $erro;
         }  
      }
}







?>

