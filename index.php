<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
    </head>
    <body>
        <form method="post" >              
            Prénom : <input type="text" name="prenom" size="12"> 
            <input type="submit" value="OK" onclick="bonjour()"> 
        </form>   

        <?php
        if (!empty($_POST)) {
            function bonjour($prenom) {
                
                return "Hello $prenom ";
            }

            $prenom = bonjour($_POST['prenom']);
            echo $prenom;
            
        }
        ?>
    </body>
</html>
