<?php
if (!extension_loaded('zip')) {
    echo "Need to install PHP zip extension </ br>";
    
    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";
    echo "</br> <a href='https://pecl.php.net/package/zip'>PECL Download site</a>";
}
else {
    phpinfo();
}
?>
