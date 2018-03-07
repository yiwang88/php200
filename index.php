<?php
    echo "Welcome to PHP L200! You can use following links to access 4 labs, or access the lab as Your-Site-Name/lab#.php" . "</br>";

    //echo "</br> <a href='lab1'>Lab 1</a>";
    //echo "</br> <a href='lab1'>Lab 1</a>";
    //echo "</br> <a href='lab1'>Lab 1</a>";
    //echo "</br> <a href='lab1'>Lab 1</a>";

echo "</br> <a href='/lab1.php'>Lab 1: Load PHP ldap extension</a>";
echo "</br> <a href='/lab2.php'>Lab 2: Install PHP mongodb extension</a>";
echo "</br> <a href='/lab3.php'>Lab 3: Modify the value of realpath_cache_size</a>";
echo "</br> <a href='/lab4.php'>Lab 4: Remove zip extension (Setup custom PHP runtime)</a>";

/*
if (!extension_loaded('ldap')) {
    echo "Need to load PHP ldap extension </ br>";

    echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";

}

else {

    phpinfo();

}
*/
?>
