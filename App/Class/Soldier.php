<?php

class Soldier
{
    private int $kill = 0;

    public function __construct(private GunContract $gun)
    {
        //
    }

    public function attack()
    {
        $this->gun->fire();
        $this->kill += 1;
    }

    public function changeGun(GunContract $gun)
    {
        $this->gun = $gun;
    }
}
