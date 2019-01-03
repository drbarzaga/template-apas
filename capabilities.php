<?php

    class Capabilities extends SQLite3 {
        function __construct()
        {
            $this->open('data/capabilities.sqlite');
        }
    }

    if (isset($_GET['value'])){
        $search = $_GET['value'];
        $capDB = new Capabilities();
        if(!$capDB) {
            echo $capDB->lastErrorMsg();
        }

        $sql =<<<EOF
          SELECT * from capabilities WHERE part_number LIKE  '%$search%' OR description LIKE '%$search%' OR cond LIKE '%$search%';
EOF;
        $result = [];
        $ret = $capDB->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            $result[] = [
                'id' => $row['id'],
                'part_number' => $row['part_number'],
                'description' => $row['description'],
                'cond' => $row['cond']
            ];
        }
        header('Content-type: application/json; charset=utf-8');
        print json_encode($result);
    }
?>