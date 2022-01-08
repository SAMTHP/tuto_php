<?php
$array2 = [
    "motos" => [
        [
            "marque" => "DUCATI",
            "prix" => 5000.0
        ],
        [
            "marque" => "BMW",
            "prix" => 6000.0
        ]
    ],
    "voitures" => [
        [
            "marque" => "BMW",
            "prix" => 4000.0
        ],
        [
            "marque" => "MERCEDES",
            "prix" => 3500.0
        ]
    ],
];

$totalVoitures = 0.0;
$totalMotos = 0.0;

foreach ($array2 as $typeVehicule => $vehicules) {
    if($typeVehicule == 'voitures'){
        echo "ici voiture \n";
        foreach ($vehicules as $vehicule) {
            $totalVoitures += $vehicule["prix"];
        }
    } elseif ($typeVehicule == 'motos'){
        echo "ici moto\n";
        foreach ($vehicules as $vehicule) {
            $totalMotos += $vehicule["prix"];
        }
    }
}

echo $totalVoitures . "\n";
echo $totalMotos;


// echo $total;