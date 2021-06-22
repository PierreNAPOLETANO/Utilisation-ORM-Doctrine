<?php

class Druid extends Fighter
{
    public function regenerate()
    {
        parent::$nbHP += parent::$dammage;
    }
}