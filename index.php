<?php
    //echo "Welcome to PHP L200! You can use following links to access 4 labs, or access the lab as <your-site-name>/lab#.php" . "</br>";

    //echo "</br> <a href='lab1'>Lab 1</a>";
    //echo "</br> <a href='lab1'>Lab 1</a>";
    //echo "</br> <a href='lab1'>Lab 1</a>";
    //echo "</br> <a href='lab1'>Lab 1</a>";



if (!extension_loaded('ldap')) {
    echo "Need to load PHP ldap extension </ br>";

    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";

}

else {

    phpinfo();

}

?>
