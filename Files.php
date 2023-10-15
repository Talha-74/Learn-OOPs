<?php

class Files
{
    function displayContent($filename)
    {
        if (!$file_exists($filename)) {
            echo "Filename does not exist" . PHP_EOL;
            return;
        }
        echo file_get_contents($filename) . PHP_EOL;
    }
    function getContent($filename): string
    {
        if (!$file_exists($filename)) {
            echo "Filename does not exist" . PHP_EOL;
            return;
        }
        $content = file_get_contents($filename) . PHP_EOL;
        return $content;
    }
}

$file1 = new Files();

