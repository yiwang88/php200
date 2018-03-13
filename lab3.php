<?php
if ( ini_get('realpath_cache_size') != 2048) {
    echo "Current realpath_cache_size = " . ini_get('realpath_cache_size') . "</ br>";
    
    echo "</br > Change this to 2048 KB" . "</ br>";

    //echo "</br> <a href='https://blogs.msdn.microsoft.com/azureossds/2018/03/09/change-php_ini_system-configuration-settings'>Get instruction here</a>" . "</br >";
    //echo "</br> <a href='http://php.net/manual/en/ini.list.php'>List of php.ini directives</a>";
    //echo "</br> <a href='http://php.net/manual/en/configuration.changes.modes.php'>Where a configuration setting may be set</a>";
    
    
}
else {
    //phpinfo();
    echo "realpath_cache_size is ". ini_get('realpath_cache_size') . "now </br >";
}

?>
