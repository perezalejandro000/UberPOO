<?php
require_once("car.php");
require_once("uberx.ptp");
require_once("uberk.ptp");
require_once("user.ptp");
require_once("account.php");
$car = new car ("KOILA123", new Account("Gonzalo
Rivera", "ASD12369", "gonzalo@latzi.pe", "1954698"));
$car->printDatacar();
$uberX = new Uberx("ASHA1858", new Account ("Estela
Villa", "PÑLOI3256", "Estela@platzi.pe", "9652633"),
"Toyota", "Corolla");
$uberx->printDatauberX();
$user = new User ("Mario Hernandez", "SDF125369",
"mario@platzi.pe", "6529699");
Suser->printDatauser();
?>