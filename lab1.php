<?php

if (!extension_loaded('ldap')) {

    echo "LDAP APPLICATION ERROR #1404 LDAP Extension Not Loaded. </ br>";
    
}
else {
    echo "LDAP extension has been installed, you are ready to go! </ br>";

    echo '</br > Installed extensions: </br >';

    print_r(get_loaded_extensions());
}
?>
