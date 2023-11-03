<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$ci = explode(",", $city);
$co = explode(",", $country);

for ($i = 0; $i < count($ci); $i++) {
    $capitals[] = [ 

        'country' => $co[$i],
        'city' => $ci[$i],
        
    ];
}

echo "<pre>";
var_dump($capitals);


?>