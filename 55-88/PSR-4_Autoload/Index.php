<?php
require_once "vendor/autoload.php";

use app\Brest as Best;
use app\controller\BaseController;

class Index{
    public function __construct()
    {
        $home = new app\Ham();
        $home->sayHome();

        $brest = new Best();
        $brest->sayBrest();

        $base = new BaseController();
        $base->showBase();
    }
}
new Index();
