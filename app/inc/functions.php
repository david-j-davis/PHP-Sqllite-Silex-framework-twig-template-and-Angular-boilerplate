<?php

//require classes
require_once("classes.php");
//require connection to database
require_once($_SERVER["DOCUMENT_ROOT"] .'/db/database.class.php');

/*
* boilerplate function for connecting and querying the sqllite database
*/
function get_items_from_db() {
    $database = new Database();
    try {
        $database->query('SELECT * FROM sometable ORDER BY title ASC');
        $items = $database->resultset();
        return $items;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage() . "</br>";
        return NULL;
    }
}

/*
* If AJAX requests, handle operations by action type
*/
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    //get action and determine type of post
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
        //logic based on action

    }
}
