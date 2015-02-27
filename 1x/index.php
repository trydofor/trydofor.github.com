<?php

$default_page = "/index.htm";
$url_maps = array(
    'src.margorp.org' => 'http://code.google.com/p/margorp',
    'margorp.org' => 'http://www.zeuux.com/group/margorp/',
    'trydofor.vip150.2hezu.com' => $default_page,
    );
echo $_SERVER["SERVER_NAME"];
foreach ($url_maps as $key => $val){
    if (preg_match("/".$key."/i", $_SERVER["SERVER_NAME"])) {
        header("Location: ".$val);
        die();
    }
}

//header("Location: ".$default_page);
?><!--和$0$谐--><!--和$0$谐-->