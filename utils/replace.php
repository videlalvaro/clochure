<?php

echo $argv[1], "\n";

$file = $argv[1];
$quote = false;
$code = '';

function is_closing($line, $i) {
    $decr = 1;
    $count = 0;
    while (isset($line[$i-$decr]) && $line[$i-$decr] == '\\' ) {
        $decr++;
        $count++;
    }
    return $count % 2 == 0;
}

$file_handle = fopen($file, "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   for ($i = 0; $i < strlen($line); $i++) {
       if ($line[$i] == '"') {
           // see if we have a closing quote
           if (is_closing($line, $i)) {
               $quote = !$quote;
           }
           // echo $quote ? 'true' : 'false', " - ", $line[$i-1], " - ", $line;
       }
       
       if (!$quote) {
           switch ($line[$i]) {
               case '(':
                   $code .= '[';
               break;
               case ')':
                   $code .= ']';
               break;
               case '[':
                   $code .= '(';
               break;
               case ']':
                   $code .= ')';
               break;
               default:
                   $code .= $line[$i];
           }
       } else {
           $code .= $line[$i];
       }
   }
}
fclose($file_handle);
file_put_contents($file, $code);