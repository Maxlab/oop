<?php

class Man
{
    private $firstname;
    private $lastname;

    /**
     * Man constructor.
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct($firstname = null, $lastname = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return null|string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return null|string
     */
    public function getLastname()
    {
        return $this->lastname;
    }



}


print '====================' . PHP_EOL;

$man1 = new Man(1.2, 22222);
print $man1->getFirstname() . PHP_EOL;
print $man1->getLastname() . PHP_EOL;


print PHP_EOL . PHP_EOL . '====================' . PHP_EOL;

