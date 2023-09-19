<?php

interface Inters
{
    public function go($place);
}
interface Inters2
{
    public function twoGo($place);
}
class Index implements Inters
{
    private $place;
    public function go($place)
    {
        $this->place = $place;
    }
    public function out(){
        echo "<pre>" . print_r($this->place, true) . "</pre>"; 
    }
    public function going(){
        echo "Ihis one is going to " . $this->place[count($this->place)-1];
    }
}
$obj = new Index();
$A1 = ["bar", "karaoke", "club", "staycation"];
$A2 = ["monastry", "pagoda", "rehab", "staycation"];
$obj->go($A1);
$obj->out();
$obj->going();
