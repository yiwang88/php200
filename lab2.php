<?php
if (!extension_loaded('mongodb')) {
    echo "PHP Error: Class 'MongoDB\Client' not found </ br>";
}
else {
    echo "Mongodb extension has been installed, find it from installed extensions, you are ready to go! </ br>";
    echo '</br > Installed extensions: </br >';
    print_r(get_loaded_extensions());
}
?>
