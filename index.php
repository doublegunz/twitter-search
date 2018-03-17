<?php
include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("uBTdwz810yo9KOYtgfOBkalRg","BszDWHo0yRm6TJ0hyOwcrPPnu59PcnxnBDEkWTFhhMQzCQzSn4");
$value = ["q" => "Gun Gun Priatna"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";
