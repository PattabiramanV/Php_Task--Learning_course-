<?php
require "./router/routerFun.php";
$routers=require "./router/routerFilePath.php";
routerFun($_SERVER['REQUEST_URI'],$routers);

?>