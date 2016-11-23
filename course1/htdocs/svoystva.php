<?php

class Product
{
    public $var1 = 'var1';
    protected $var2 = 'var2';
    private $var3 = 1;
}

$pr1 = new Product();
$pr2 = new Product();

$pr1->var1 = 'myvar1';
//$pr1->var2 = 'myvar2';
//$pr1->var3 = 'myvar2';

var_dump($pr1);
var_dump($pr2);



