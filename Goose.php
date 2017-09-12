<?php

class Master {

    public $num=0;
    public $isBg=false

    public function __construct($num=4,$isBg=false){
        $this->num=$num;
        $this->isBg=false;
        
    } 

    public function run()
    {
        # code...
    }

    public function fork()
    {

    }

}
pcntl_signal(SIGCHLD, SIG_IGN);//忽略子进程退出的信号


