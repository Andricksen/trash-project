<?php
if(!isset($_COOKIE['token']))
{
    setcookie('token', uniqid(), time() + (86400 * 30), "/");
}