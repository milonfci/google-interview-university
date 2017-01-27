<?php
echo '<pre>';
$dom = new DOMDocument;
$dom->loadHTML(file_get_contents("http://www.w3schools.com/"));
foreach ($dom->getElementsByTagName('a') as $node) {
    echo $node->nodeValue . ': ' . "http://www.w3schools.com".$node->getAttribute("href") . "\n";
}