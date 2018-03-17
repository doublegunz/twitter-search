<?php
include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("Consumer Key (API Key)","Consumer Secret (API Secret)");
$value = ["q" => "tes"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";
