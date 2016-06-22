<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 06:02.
 */

namespace MidoriKocak\Interfaces;

interface AppInterface extends ItemInterface
{
    public function install();
    public function open();
    public function close();
    public function register(string $email, string $password);
}
