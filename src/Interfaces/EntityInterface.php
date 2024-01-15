<?php


namespace Felek\App\Interfaces;

interface EntityInterface {

    public function setId(int $id) : self;
    public function getId() : int;
}