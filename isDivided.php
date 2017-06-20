<?php
use \App\Divider;

require 'vendor/autoload.php';

try{
    $obj=new Divider();
    for($i=1;$i<=100;$i++){
        $obj->setCounterNumber($i);
        echo( $obj->isDivided()."\n");
        echo "<br>";
    }

}catch( InvalidArgumentException $e){
    print_r($e);
}