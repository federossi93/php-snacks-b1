<?php 
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema.
//Olimpia Milano - Cantù | 55-60

$casa = [ 'squadra'=>'Milano' ,'punteggio' => '55' ];

$ospite = ['squadra'=>'Cantu' ,'punteggio' => '60' ];

echo $casa['squadra'] . ' - ' . $ospite['squadra'] . ' | ' . $casa['punteggio']. ' - '. $ospite['punteggio'];





// echo $casa['squadra'];
// echo ' - ';
// echo $ospite['squadra'];
// echo ' | ';
// echo $casa['punteggio'];
// echo ' - ';
// echo $ospite['punteggio'];


?>