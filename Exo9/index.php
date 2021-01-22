<head>

</head>
<body>
<form action="" method="post">
<?php
    $BDD = new PDO('mysql:host=localhost; dbname=MaelDrelonPOO; charset=utf8','mael', '');
    $rq = $BDD->query("SELECT * FROM Personnage");
?>

    <select name='Personnage'> 
        <?php
            foreach ($rq as $Personnage) 
            {
                echo "<option value='".$Personnage["id"]."'>".$Personnage["Pseudo"]."</option>";
            }
        ?>
    </select>

    <input type="submit" name="Envoyé" value="Envoyer"/>
</form>

<?php
if (isset($_POST["Envoyé"])) 
{
    include "Personnage.php";

    if (isset($_POST["Personnage"])) 
    {
        $Delete = new DeletePerso($DB, $_POST["Personnage"]);
        $Delete->Delete();
    } 
    else 
    echo "Un problème est apparu";
}        
highlight_file(__FILE__);
?>
</body>