<?php
    $gdId = 6642229;
    $input = array();
    $result = array();

    $input["ruru"] = "嚕嚕咕嚕咕嚕";
    $input["pupu"] = "PUPU";

    if(!empty($input["ruru"])) {
        $result["item_url"] = "https://tw.buy.yahoo.com/gdsale/" . $input["ruru"] . "-" . $gdId . ".html";
    }

    if(!empty($result["item_url"])) {
        print $result["item_url"] . PHP_EOL;
    }
