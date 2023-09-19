<?php

use Index as GlobalIndex;

interface Rules{
    public function scene(); //no body, public
    public function vegetables();
    public function houses();
    public function characters();
}

class Index implements Rules{
    public function scene()
    {
        echo "SCENE!!!";
    }
    public function vegetables()
    {
        echo "VEGETABLES!!!";
    }
    public function houses()
    {
        echo "HOUSES!!!";    
    }
    public function characters()
    {
        echo "CHARACTERS!!!";
    }
}
$game = new Index();
$game->scene();
$game->vegetables();
$game->houses();
$game->characters();
?>