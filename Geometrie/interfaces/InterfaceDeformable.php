<?php

interface Deformable
{
    public function deformation($coeffH, $coeffV);
    public function surface($height, $width);
}