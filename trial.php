<?php
/**
 * Created by PhpStorm.
 * User: Fredrick
 * Date: 7/15/2016
 * Time: 12:25 AM
 */
$pass = 'trial';
$salt = 'Jjkjkbjk&%^*tgyT*87gBkvVFYU&^r7fKUgjh';

$hash_pass = sha1($salt.$pass);

echo $hash_pass;
?>