<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <div class="picture_header">
            
        </div>
        <nav class="shadow">
            <ul>
                <li><a href="home.php"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></i><p>home</p></a></li>
                <li><a href="bedrijf.php"><i class="fa fa-building-o fa-2x" aria-hidden="true"></i><p>bedrijf</p></a></li>
                <li><a class="current_page" href="portfolio.php"><i class="fa fa-folder-open-o fa-2x" aria-hidden="true"></i><p>portfolio</p></a></li>
                <li><a href="contact.php"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></i></i><p>contact</p></a></li>
            </ul>
        </nav>
        <div class="container">
            <?php
            //maak een variable voor het aantal producten
            //loop door de producten en schrijf voor elk product div + class h2 en p
            //voeg voor elke vier producten een extra div toe voor de sier
            //voeg voor elke vier producten+extra div een container div eromheen toe
            
            
            
            
            //aantal producten uit de database:
            $aantal =23;
            
            //bereken aantal sier divjes dat moet worden gemaakt
            $aantal+=floor(($aantal/4)); //voor elke vier divjes een extra
            if($aantal%5>1){
                $aantal++;
            }
            
            for($i = 0; $i<$aantal;$i++){
                
                if($i%5==0){
                    print('<div class="grid_portfolio">'); //container div voor elke vijf divjes
                }
                
                print('<div class="p'.($i%5+1).'">'); 
                if($i%5!=2){//sla elke derde over die heeft geen inhoud

                    //haal hier spul uit de database
                    //print de inhoud van het divje
                    print('<h2>Titel</h2><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>');
                }
                print('</div>');//sluit div af
                
                if($i%5==4||$i==$aantal-1){ // sluit container div af na vijf divjes of na de laatste div
                    print('</div>');
                }
                
            }
        
           
            ?>
            
        </div>
        <footer>
            <div class="grid_footer">
                <div class="f1">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p></div>
            </div>
        </footer>
    </body>
</html>
