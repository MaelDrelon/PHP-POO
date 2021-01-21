<?php require("Personnage.php"); ?>
    

<html>
<head>
</head>
<body>
    <?php 
    try
    {
        $Table = array();
        $BDD = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelonPOO; charset=utf8','mael', '');
        $rq = $BDD->query("SELECT * FROM `Personnage`");
     
        while($User = $rq->fetch()) /*Tans qu'il y a des personnages, les récupérers*/
        
        array_push($Table, new Personnage($User));
        foreach($Table as $Valeur) 
        $Valeur->MontrerInfo();
    }   
    catch (\Throwable $th) 
    {
        echo $th;
    }
    highlight_file(__FILE__);
    ?>
</body>