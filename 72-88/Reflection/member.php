<?php

namespace App;

class Member
{
    private $isAuth = false;
    private $detail = [
        "name"=>"Kane",
        "age"=>30,
        "club"=>"Bayern"
    ];
    public function getDetail(){
        return $this->detail;
    }
    public function setAuth($bol){
        $this->isAuth = $bol;
    }
    public function getAtuh(){
        return $this->isAuth;
    }
}
