<?php

require_once "app/Ham.php";
require_once "app/Brest.php";
require_once "app/middleware/filter.php";

use app\middleware\Filt;
use app\Brest as Best;

class Index{
    public function __construct()
    {
        $home = new app\Ham();
        $home->sayHome();

        $brest = new Best();
        $brest->sayBrest();

        $filter = new Filt();
        $filter->showFilt();
    }
}
new Index();
