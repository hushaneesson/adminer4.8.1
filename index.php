<?php

ini_set('display_errors', 'Off');

function adminer_object()
{
    // required to run any plugin
    include_once "./plugin.php";

    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }

    // enable extra drivers just by including them
    //~ include "./plugins/drivers/simpledb.php";

    $plugins = array(
        // specify enabled plugins here
        new AdminerLoginPasswordLess()
        // new AdminerLoginIp(['192.168.0.17'])
        // new AdminerDumpXml(),
        // new AdminerTinymce(),
        // new AdminerFileUpload("data/"),
        // new AdminerSlugify(),
        // new AdminerTranslation(),
        // new AdminerForeignSystem(),
    );

    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include "./adminer.php";
