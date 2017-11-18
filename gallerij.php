<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>gallerij</title>
    </head>
    <body>
        <p>dit is de gallerij</p>
        <?php 
        include_once('menu.php');
        
        
        //deze array komt moet uit de database komen
        $items = array(
            array("img.png","naam van dit ding","tekst en uitleg"),
            array("img.png","face","tekst en uitleg")
        );
        
        
        //rijtje van items maken:
        foreach ($items as $value) {
            print("
                <div>    
                   <h3>
                   ".$value[1]."</h3>
                   <img src='".$value[0]."' alt='Smiley face'
                   <p>".$value[2]."</p>
                    
                </div>    
                    ");
        }
        ?>
    </body>
</html>
