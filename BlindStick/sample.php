<?php 
    $command = escapeshellcmd('python main.py');
    $output = shell_exec($command);
    echo $output;
?>