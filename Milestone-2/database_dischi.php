<?php


$database = [
    [

        "Poster" => './img/petergabriel_so_1re2 (1).jpg',
        "Title" => "So",
        "Artist" => "Peter Gabriel",
        "Year" => "1986"
    
    ],
    [
        "Poster" => "./img/petergabriel_us_42w.jpg",
        "Title" => "Us",
        "Artist" => "Peter Gabriel",
        "Year" => "1992"
    ],
    [
        "Poster" => "./img/oasis_definitelymaybe_abf.jpg",
        "Title" => "Definitely Maybe",
        "Artist" => "Oasis",
        "Year" => "1994",
    ],
    [
        "Poster" => "./img/oasis_whatsthestorymorning_44b6.jpg",
        "Title" => "What's the story ('Morning Glory')",
        "Artist" => "Oasis",
        "Year" => "1995",
    ],
    [
        "Poster" => "./img/oasis_beherenow_cof.jpg",
        "Title" => "Be Here Now",
        "Artist" => "Oasis",
        "Year" => "1997",
    ],
    [
        "Poster" => "./img/ledzeppelin_ledzeppelini_dfjx.jpg",
        "Title" => "Led Zeppelin I",
        "Artist" => "Led Zeppelin",
        "Year" => "1969",
    ],
    [
        "Poster" => "./img/deftones_aroundthefur_1fgu.jpg",
        "Title" => "Around the fur",
        "Artist" => "Deftones",
        "Year" => "1997",
    ],
    [
        "Poster" => "./img/deftones_whitepony_gli.jpg",
        "Title" => "White Pony",
        "Artist" => "Deftones",
        "Year" => "2000",
    ],
    [
        "Poster" => "./img/fabriziodeandr_creuzadem_1fxs.jpg",
        "Title" => "Creuza De Ma",
        "Artist" => "Fabrizio De Andrè",
        "Year" => "1984",
    ],
    [
        "Poster" => "./img/fabriziodeandr_tuttimorimmoastento_8cwx.jpg",
        "Title" => "Tutti morimmo a stento",
        "Artist" => "Fabrizio De Andrè",
        "Year" => "1968",

    ],

];

header('Content-Type: application/json');
echo json_encode($database);

?>