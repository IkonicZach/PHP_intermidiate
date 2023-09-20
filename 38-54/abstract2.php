<?php
// abstract class PhayPhay{
//     const DB_HOST = "GOGO";
//     public $name = "Choung";

//     public abstract function concrete();
// }

// class Main extends PhayPhay{
//     public function concrete(){
//         echo "This is concrete.";
//     }
// }

// $obj = new Main();
// echo $obj->concrete();
class JK{
    public function notJK(){
        echo "jk hehe";
    }
}
class Soap extends JK{
    public function getSoap(){
        echo __CLASS__;
    }
}
class Her{
    public $herSoap = "Cucumber";
}
class Me extends Soap{
}
$obj = new Me();
?>