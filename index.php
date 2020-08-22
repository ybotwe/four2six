<?php
require_once realpath("vendor/autoload.php");

use App\Game\Player\Player;
use App\Game\GameController;
use App\Somedata\Database;

//Testing out the date time class from the book
$datetime = new DateTime('2020-08-20 10:17 AM');
$interval = new DateInterval('P2W');
$datetime->add($interval);
echo $datetime->format('Y-m-d H:i:s') . "\n";


$player = new Player();
$gameController = new GameController();
$database = new Database();
$database->addTable("Players");
?>