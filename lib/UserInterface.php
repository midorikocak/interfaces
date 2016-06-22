<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:23.
 */

namespace MidoriKocak\Interfaces;

interface UserInterface extends ItemInterface
{
    public function getEmail():string;
    public function isLogged():bool;
    public function changePassword(string $oldPassword, string $newPassword1, string $newPassword2):bool;
    public function login(string $password):bool;
    public function logout():bool;
}
