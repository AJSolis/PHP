<?php 

require "Controllers/homepagecontroller.php";

use Controller\HomepageController\Homepage;

$output = new Homepage;
$output->index();

?>