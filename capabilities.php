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
          SELECT * from capabilities WHERE pn LIKE  '%$search%'
          OR alternate_pn LIKE '%$search%' 
          OR boeing_spec LIKE '%$search%'
          OR description LIKE '%$search%'
          OR manufacturer LIKE '%$search%'
          OR ata LIKE '%$search%';
EOF;
        $result = [];
        $ret = $capDB->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            $result[] = [
                'id' => $row['id'],
                'part_number' => $row['pn'],
                'alternate_pn'=> $row['alternate_pn'],
                'boeing_spec' => $row['boeing_spec'], 
                'description' => $row['description'],
                'manufacturer' => $row['manufacturer'],
                'ata' => $row['ata']
            ];
        }
        header('Content-type: application/json; charset=utf-8');
        print json_encode($result);
    }
?>