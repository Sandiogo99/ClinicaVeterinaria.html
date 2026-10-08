<?php
 namespace ClinicaVeterinaria\projeto\php;
 require_once('veterinaria.php');
 use ClinicaVeterinaria\projeto\php\Veterinario;


    //chamar as ouotras classes
    $Allan = new Veterinario(1,"Allan" ,"Clinico Geral", 13000,"Rua Bla", "11956562323");
    $Joao = new Veterinario(2,"Joao" ,"oftalmo", 20000,"Rua geri", "111111111111");

    echo $Allan-> imprimir();
    echo $Joao-> imprimir();

//fim da classe



 ?>