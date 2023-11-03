<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$cityArray = explode(",",$city);
$capitals = [];
for ($i = 0; $i < count($cityArray); $i++) {
    $countryCity["city"] = $cityArray[$i];
    array_push($capitals, $countryCity);
}

echo "<pre>";
var_dump($capitals);

?>