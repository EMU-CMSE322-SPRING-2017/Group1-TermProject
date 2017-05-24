<?php
         	  mysql_connect("localhost", "root", "root");
    mysql_select_db("megts");      
    
    $res = mysql_query("SELECT * FROM users ORDER BY id");
    $records = array();
    while($obj = mysql_fetch_object($res)) {
        $records []= $obj;
    }
    echo json_encode($records);
         	  ?>