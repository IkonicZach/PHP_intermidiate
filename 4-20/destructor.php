<?
class destructor{
    var $t = 0;
    public function __construct(){
        echo "I construct<br>";
    }
    public function loop(){
        for($i = 0; $i < 10; $i++){
            $this-> t = $i;
            echo $this->t . "<br>";
        }
    }
    public function __destruct(){
        echo "I destruct";
    }
}
$obj = new destructor();
$obj->loop();
?>