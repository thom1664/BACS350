<?php

    // Connect to the Bluehost database for subscribers
    function subscriber_db() {
        $port = '3306';
        $dbname = 'davidtw0_subscribers';
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'davidtw0';
        $password = 'GolfBoy1898!';
        return new PDO($db_connect, $username, $password);
    }

    
    // Query for all subscribers
    function query_subscribers ($db) {
        $query = "SELECT * FROM subscribers";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // render_subscriber_list -- Create a bullet list in HTML
    function render_subscriber_list($subscribers) {
        $s = '<ul>';
        foreach($subscribers as $row) {
            $name = "<b>$row[name]</b>";
            $email = "email: $row[email]";
            $s .= "<li>$name - $email</li>";
        }
        $s .= '</ul>';
        return $s;
    }


    // Create a connection
    $db = subscriber_db();
   
?>
