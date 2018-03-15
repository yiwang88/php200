<?php

if (!extension_loaded('ldap')) {

    echo "LDAP APPLICATION ERROR #1404 LDAP Extension Not Loaded. </ br>";
    //echo "</br> <a href='https://blogs.msdn.microsoft.com/azureossds/2017/08/21/enable-php-extensions-on-azure-web-app-on-windows/'>Get instruction here</a>";
}
else {
    echo "LDAP extension has been installed, you are ready to go! </ br>";

    echo '</br > Installed extensions: </br >';

    print_r(get_loaded_extensions());
}
?>
