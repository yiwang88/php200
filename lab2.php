<?php
if (!extension_loaded('mongodb')) {
    echo "Need to install PHP mongodb extension </ br>";
    
    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";
    echo "</br> <a href='https://pecl.php.net/package/mongodb'>PECL Download site</a>";
}
else {
    phpinfo();
}
?>
