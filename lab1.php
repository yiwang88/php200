<?php

if (!extension_loaded('ldap')) {

    echo "LDAP extension is not available. Please install or enable the php-ldap extension on your web serve </ br>";
    //echo "</br> <a href='https://blogs.msdn.microsoft.com/azureossds/2017/08/21/enable-php-extensions-on-azure-web-app-on-windows/'>Get instruction here</a>";
}
else {
    echo "LDAP extension has been installed, you are ready to go! </ br>";

    echo '</br > Installed extensions: </br >';

    print_r(get_loaded_extensions());
}
?>
