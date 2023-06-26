<?php

use Phalcon\Mvc\Controller;

use MyApp\Config\config;
include APP_PATH."/etc/app.php";

// defalut controller view
class IndexController extends Controller
{
    public function indexAction()
    {
        // version name and host name of configuration

        echo "Version :" .version;
        echo "<br>";
        echo "Time :" .time;
        echo "<br>";
        echo "Timezone :" .timezone;
        echo "<br>";
        echo "language :" .language;
        echo "<br>";
        echo "<pre>";
        $config = new config();
        print_r($config->demo());
        die;
        
        
    }
}
