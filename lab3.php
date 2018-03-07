<?php
if ( ini_get('realpath_cache_size') != 64) {
    echo "Current realpath_cache_size = " . ini_get('realpath_cache_size') . "</ br>";
    
    echo "Increase this to 64 KB" . "</ br>";

    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";

    echo "</br> <a href='http://php.net/manual/en/errorfunc.configuration.php'>Reference: PHP Runtime Configuration</a>";
}
else {
    phpinfo();
}

?>
