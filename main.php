<?php
require("vendor/autoload.php");

use Carbon\Carbon;

$tommorow = Carbon::now()->addDay();
print($tommorow);