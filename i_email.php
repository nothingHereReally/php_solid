<?php
namespace Model;

interface UserInterface
{
    public function setEmail($email);
    public function getEmail();
    public function getGravatar();
}

