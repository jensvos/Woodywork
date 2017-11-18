<div id="menu">
    <ul>
<?php


                //lijst met menu items moet uiteindelijk uit database komen
                $menulijst=array(
                array('HOME','index.php'),
                array('GALLERIJ','gallerij.php'),
                array('CONTACT','contact.php'));



        //maak een rij van linkjes
        foreach($menulijst as $value){
                print( '<a href="'.$value[1].'"><li>'.$value[0].'</li></a>');
        }
?>
    </ul>
</div>