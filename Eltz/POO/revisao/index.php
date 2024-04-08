<?php 
    require_once('./classes/wallet.php');
    require_once('./classes/reports.php');

    $marcelo = new Wallet('Marcelo', 60.90);

    $reports = new Reports();

    $reports->printBalance($marcelo);
?>