<?php
require_once('plugins/login-servers.php');

return new AdminerLoginServers(
    $servers = array("172.18.0.1"),
    $driver = 'server'
);

?>
