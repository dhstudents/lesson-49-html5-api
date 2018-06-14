<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
// echo "id: 100\n";
// echo "event: ping\n";
echo "data: The server time is: {$time}\n";
//echo "data: my name is danny\n\n";

flush();
