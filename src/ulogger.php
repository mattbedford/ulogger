<?php


abstract class ulogger {


    public static function debug($message)
    {

        if (true !== WP_DEBUG) return;

        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }

    }


    public static function file($message)
    {

        $filename = 'ulogger.txt';
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents($filename, $timestamp . ' ' . $message . PHP_EOL, FILE_APPEND);
        $path = ABSPATH . $filename;
        self::console("Ulogger has logged info to file: " . $path);
    }


    public static function console($message)
    {
        $json = json_encode($message);
        echo "<script>";
        echo "console.log(";
        echo $json;
        echo ");";
        echo "</script>";
    }


    public static function screen($message)
    {

        echo "<pre>";
        print_r($message);
        echo "</pre>";

    }

}
