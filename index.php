<?php
if (!extension_loaded('ldap')) {
    echo "Need to load PHP ldap extension </ br>";
 
    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";
}
else {
    phpinfo();
}
?>
