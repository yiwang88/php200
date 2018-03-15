
<?php

$allext = get_loaded_extensions(true);
if (!in_array("the ionCube PHP Loader", $allext)) {

    echo "My script requires ionCube loaders Do you have ionCube installed? </ br>";
    echo "</br> <a href='https://www.ioncube.com/loaders.php'>Download ionCube Loader Here</a>";
    //echo "</br> <a href='https://github.com/projectkudu/kudu/wiki/Xdt-transform-samples#using-a-custom-phpini'>Get instruction here</a>";
}

else {
    echo "Zend extension ionCube Loader is installed, ready to go! </br >";
    var_dump($allext);

}

?>
