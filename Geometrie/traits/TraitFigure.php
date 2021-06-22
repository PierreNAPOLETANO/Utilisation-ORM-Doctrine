<?php

trait TraitFigure 
{
    public function surface($height, $width)
    {
        $surface = 0;

        if(static::class == "Rectangle")
            $surface = $height * $width;
        if(static::class == "Triangle")
            $surface = $width * ($height / 2);
        if(static::class == "Carre")
            $surface = $height * 2;
        
        return $surface;
    }
}