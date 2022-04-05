<?php
if(isset($_POST['connection'])) {
    snmp2_set("127.0.0.1", "public", ".1.3.6.1.2.1.1.4.0", "s", $_POST['connection']);
}

    $ip = "127.0.0.1";
    $group = snmp2_walk($ip, "public", ".1.3.6.1.2.1.1");
    $groupSplit = "";
    foreach ($group as $elm) {
        $groupSplit .= $elm . "!_!";
    }
    echo $groupSplit;
   return $groupSplit;
