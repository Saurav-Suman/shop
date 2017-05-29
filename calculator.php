<?php
require_once 'autoload.php';


try {
    //loading Args
    $argumentsCount = array_slice($argv, 1, count($argv));
    if (count($argumentsCount) < 1) {
        die('No option was chosen');
    }
    //Action Register
    //print_r($argv);
    switch ($argv[1]) {
        case 'signup':
        $signup=new signup();
        $signup->output($argv);
        break;
        case 'spend':
        $spend=new spend();
        $spend->output($argv);
        break;
        case 'redeem':
        $redeem=new redeem();
        $redeem->output($argv);
        break;
        default:
        die("Error");
    }
    
} catch (\Exception $e) {
    die($e->getMessage());
    
}