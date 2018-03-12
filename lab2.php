<?php
if (!extension_loaded('mongodb')) {
    echo "Fatal error: Class 'MongoDB\Client' not found </ br>";
    
    //echo "</br> <a href='https://docs.microsoft.com/en-us/azure/app-service/web-sites-php-configure'>Get instruction here</a>";
    //echo "</br> <a href='https://pecl.php.net/package/mongodb'>PECL Download site</a>";
}
else {
    echo "Mongodb extension has been installed, find it from installed extensions, you are ready to go! </ br>";
    echo '</br > Installed extensions: </br >';
    print_r(get_loaded_extensions());
}
?>
