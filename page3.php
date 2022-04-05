<?php
$ip= "127.0.0.1";
$udp1= snmp2_walk($ip,"public",".1.3.6.1.2.1.7.5.1.1");
$udp2= snmp2_walk($ip,"public",".1.3.6.1.2.1.7.5.1.2");
$i=0;
$info="";
foreach($udp1 as $u){
    $info.=$u.",_,".$udp2[$i]."!_!";
    $i++;
}
echo $info;
return $info;