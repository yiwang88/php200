<?php

if (!extension_loaded('ldap')) {

    echo "Need to enable PHP ldap extension </ br>";
    echo "</br> <a href='https://blogs.msdn.microsoft.com/azureossds/2017/08/21/enable-php-extensions-on-azure-web-app-on-windows/'>Get instruction here</a>";
}
else {
    phpinfo();
}
?>
