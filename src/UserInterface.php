<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:23
 */

namespace MidoriKocak;


interface UserInterface
{
    public function getId():string;
    public function getEmail():string;
}