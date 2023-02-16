<?php

$url = 'https://randomuser.me/api/?results=20';

$randomJson = file_get_contents($url);
$randomJson = json_decode($randomJson, true);

echo '<pre>';
echo print_r($randomJson, true);
echo '</pre>';


echo '<div>';
foreach ($randomJson['results'] as $value) {
    $firstName = $value['name']['first'];
    $lastName = $value['name']['last'];
    if ($value['gender'] === 'female') {
        $firstName = '<u>' . $value['name']['first'] . '</u>';
        $lastName = '<u>' . $value['name']['last'] . '</u>';
    }
    echo '<div>';
    echo '<img src="' . $value['picture']['medium'] . '"><br>';
    echo '<p>' . $firstName . '</p>';
    echo '<p>' . $lastName . '</p>';
    echo '<p>' . $value['email'] . '</p>';
}
echo '</div>';
