<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda. -->
<?php

require_once __DIR__.'/Dipendente.php';
require_once __DIR__.'/Dirigente.php';

$dipendente = new Dipendente('Giovannina', 'Bianchi', '123456', 'g5d4g8r2d5sa2145');
$dipendente->setContratto('Contratto di Apprendistato');
echo $dipendente->getContratto();
$dipendente->setRetribuzione('21.000');

var_dump($dipendente);

$dipendente2 = new Dirigente('Ermenegildo', 'Cacchina', '001144', 'es5g6d5gt94f87ef', 'Cellulare e Auto aziendali');
var_dump($dipendente2);
