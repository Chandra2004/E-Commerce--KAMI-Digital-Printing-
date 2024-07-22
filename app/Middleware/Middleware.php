<?php

namespace ECommerce\Shoping\Middleware;

require_once __DIR__ . '/../App/Config.php';

interface Middleware {
    function before();
}

?>