<?php
/**
 * Created by PhpStorm.
 * User: frknbasaran
 * Date: 30/03/15
 * Time: 17:46
 */

class Main {

    function checkSession() {
        if(isset($_SESSION['user'])) return true;
        else return false;
    }
}