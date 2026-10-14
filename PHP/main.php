<?php
 namespace ClinicaVeterinaria\projeto\php;
 require_once('veterinaria.php');
 use ClinicaVeterinaria\projeto\php\Veterinario;


    //chamar as ouotras classes
    $Allan = new Veterinario(1,"Allan" ,"Clinico Geral", 13000,"Rua Bla", "11956562323");
    $Joao = new Veterinario(2,"Joao" ,"oftalmo", 20000,"Rua geri", "111111111111");
    $Cleide = new Veterinario(3,"cleide", "Cardiologista", 20000, "Rua pedro afonso","11999999999");

    echo $Allan-> imprimir();
    echo $Joao-> imprimir();
    echo $Cleide-> imprimir();
//fim da classe



 ?>