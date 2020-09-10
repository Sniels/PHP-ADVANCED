<?php

    $voornaam = array("Piet", "Muhammad", "Els"); 
    $achternaam = array("Pieterson", "Mohammedson", "Eefjeson");
    $leeftijd = array("Piet"=>"35", "Muhammad"=>"37", "Els"=>"43");
    $klas = array("Piet"=>"9c", "Muhammad"=>"9a", "Els"=>"9b");

    echo "Gegevens " . $voornaam['2'] ."<br>". "Voornaam: " . $voornaam["2"]  . "<br>" . "Acternaam: " . $achternaam["0"] . "<br>". "Leeftijd: " .$leeftijd['Muhammad'] . "<br>". "Klas: " .$klas['Piet'];
