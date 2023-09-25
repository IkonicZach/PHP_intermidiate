<?php
require_once "vendor/autoload.php";


class Index{
    public function __construct()
    {
        $start = new Start();
        $start->startName();

        $home = new Home();
        $home->homeName();

        $filter = new Filter();
        $filter->filterName();

        $helper = new Helper();
        $helper->helperName();

        $end = new End();
        $end->endName();
    }
}
new Index();
?>