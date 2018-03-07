<?php
if ( ini_get('realpath_cache_size') != 64K) {
    echo "Current realpath_cache_size = " . ini_get('realpath_cache_size') . "</ br>";
    
    echo "</br > Increase this to 64 KB" . "</ br>";

    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";

    echo "</br > References:
    echo "</br> <a href='http://php.net/manual/en/ini.list.php'>List of php.ini directives</a>";
    echo "</br> <a href='http://php.net/manual/en/configuration.changes.modes.php'>Where a configuration setting may be set</a>";
    
    
}
else {
    phpinfo();
}

?>
