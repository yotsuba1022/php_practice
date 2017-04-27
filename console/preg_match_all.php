<?php

    /*
        preg_match_all — Perform a global regular expression match
        
        http://php.net/manual/en/function.preg-match-all.php
    */

    $pattern = "|<[^>]+>(.*)</[^>]+>|U";
    $content = "<b>example: </b><div align=left>this is a test</div>";
    $matches = array();

    /*
        Array
        (
            [0] => Array
                (
                    [0] => <b>example: </b>
                    [1] => <div align=left>this is a test</div>
                )

            [1] => Array
                (
                    [0] => example:
                    [1] => this is a test
                )

        )
    */
    echo "PREG_PATTERN_ORDER". PHP_EOL;
    preg_match_all($pattern, $content, $matches, PREG_PATTERN_ORDER);
    print_r($matches);

    /*
        Array
        (
            [0] => <b>example: </b>
            [1] => example:
        )
    */
    echo "preg_match" . PHP_EOL;
    preg_match($pattern, $content, $matches);
    print_r($matches);

    /*
        Array
        (
            [0] => Array
                (
                    [0] => <b>example: </b>
                    [1] => example:
                )

            [1] => Array
                (
                    [0] => <div align=left>this is a test</div>
                    [1] => this is a test
                )

        )
    */
    echo "PREG_SET_ORDER" . PHP_EOL;
    preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
    print_r($matches);
