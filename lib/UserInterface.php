<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:23
 */

namespace MidoriKocak\Interfaces;


interface UserInterface extends ItemInterface
{
    public function getEmail():string;
    public function login():bool;
    public function logout():bool;
}