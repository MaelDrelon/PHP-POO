<head>

</head>
<body>
<form action="" method="get">

<label for="Pseudo">Pseudo</label>
<input type="text" name="Pseudo" id="Pseudo">

<label for="Force">Force</label>
<input type="text" name="Force" id="Puissance">

<label for="Vie">Vie</label>
<input type="text" name="Vie" id="Vie">

<input type="submit" name="submit" value="Envoyer">
</form>

<?php
if (isset($_GET["submit"])) 
{
    try 
    {
        $BDD = new PDO('mysql:host=localhost; dbname=MaelDrelonPOO; charset=utf8','mael', '');
        $rq = $BDD->prepare("INSERT INTO `Personnage`(`Vie`, `Puissance`, `Pseudo`) VALUES (?, ?, ?)");
        $rq->execute(array($_GET["Vie"], $_GET["Force"], $_GET["Pseudo"]));
    } 
    catch (\Throwable $th) 
    {
        echo $th;
    }
}            
highlight_file(__FILE__);
?>
</body>