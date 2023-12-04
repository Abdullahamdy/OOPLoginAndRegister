<?php


require_once 'core/init.php';
$user = DB::getInstance()->get("users", array('username', '=', 'Abdullah'));
if (!$user->count()) {
    echo 'NO User';
} else {
        var_dump( $user->first());
    
}
