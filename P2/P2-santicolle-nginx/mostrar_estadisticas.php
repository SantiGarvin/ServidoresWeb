<?php
$servidores = array(
    'http://localhost:8001',
    'http://localhost:8002',
    'http://localhost:8003',
    'http://localhost:8004',
    'http://localhost:8005',
    'http://localhost:8006',
    'http://localhost:8007',
    'http://localhost:8008'
);

foreach ($servidores as $servidor) {
    $url = "{$servidor}/solicitudes.php";
    $resultados = file_get_contents($url);
    echo $resultados . "\n";
}