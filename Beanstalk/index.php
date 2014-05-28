<?php
header('Content-type: text/plain');

header('Content-Disposition: inline; filename="details.txt"');

readfile('details.txt');
?>