<?php

abstract class Gun
{
    public function fire()
    {
        echo $this->sound . PHP_EOL;
    }
}
