<?php

use Faker\Factory as Faker;

$faker = Faker::create();

echo "<table>";
echo "<tr><th>Name</th><th>Score</th></tr>";

for ($i = 0; $i < 50; $i++) {
    echo "<tr>";
    echo "<td>" . $faker->name . "</td>";
    echo "<td>" . rand(70, 100) . "</td>";
    echo "</tr>";
}

echo "</table>";