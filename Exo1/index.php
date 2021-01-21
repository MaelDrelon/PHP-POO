<?php require("User.php"); ?>
<html>
<head>
</head>
<body>
    <table border="solid">
        <tr>
            <th style= "background-color : fuchsia">User</th>
        </tr>
        <tr>
            <td style= "background-color : fuchsia"><p>-Nom : String</p><p>-Prenom : String</p></th>
        </tr>
        <tr>
            <td style= "background-color : fuchsia"><p>+AfficheUser() : Void</p></th>
        </tr>
    </table>
    
    <?php 
        $User = new WUser;
        $User->afficherUser();
        highlight_file(__FILE__);