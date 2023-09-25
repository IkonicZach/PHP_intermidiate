<?php

require_once "Player.php";

class Index{
    public function __construct()
    {
        $player = new Player();
        $player->setPath("C:\\Users\\DELL\\Music\\");
        $player->setMusic("More.mp3");

        $this->playNow($player->getPath(), $player->getMusic());
    }
    public function playNow($path, $music){
        echo "Playing " . $music . " from " . $path;
    }
}
new Index();