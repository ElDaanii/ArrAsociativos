<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$cityArray = explode(",",$country);
$capitals = [];

for ($i = 0; $i < count($cityArray); $i++) {
    $countryCity["country"] = $cityArray[$i];
    array_push($capitals, $countryCity);
}

echo "<pre>";
var_dump($capitals);
?>
