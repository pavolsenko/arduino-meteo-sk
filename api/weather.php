<?php
$url = 'http://api.openweathermap.org/data/2.5/onecall?appId=4d587dbf9b29f3313cbd5a4ffbf26e31&lat=48.1485&lon=17.1077&units=metric';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response);

echo '#' . ceil($data->current->temp) . '°C,' . $data->current->weather[0]->main . ',' . ceil($data->daily[0]->temp->day) . '°C,' . $data->daily[0]->weather[0]->main;
