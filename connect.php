<?php
//connect to database server
$dbcnx = mysql_connect('localhost', 'root', 'hollesgrp');
if (!$dbcnx) {
        exit('<p>Unable to connect to the database server at this time.</p>');
}

//select database
if (!@mysql_select_db('reactduino0')) {
        exit('<p>Unable to locate the record database at this time.</p>');
}
?>

