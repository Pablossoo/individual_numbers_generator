<?php


require_once  '../vendor/autoload.php';


try {
    $factory = (new \Factory\FactoryPersonalNumber())->create('Pesel');
    echo $factory->generate();
}catch (Exception $exception)
{
    echo $exception->getMessage();
}


